/// <reference path="../../typings/tsd.d.ts"/>
/* ===============================
AUTHOR:          George Savchenko
CREATE DATE:     20/04/2017
PURPOSE:         Manage the models in the scene and their lists
================================
Change History:
V3.9    Documented code
V4.1    Updated to three.js 85 ; had to replace THREE.MultiMaterial with Array
V4.3    Fixed table clamp being added to models that are not the table
        Fixed custom arm loading to set the armsPartCount so it can be removed in one click
V4.4    When selecting any base in build your system before they are all loaded the will not appear on the screen afterwards
        method added to check if the last model of the custom arm is a wedge mount
V4.5    The update method now checks the models in the inUse list to see if they were loaded
V4.8    Risers are automatically removed, fixed misaligned models attaching to 90 degree custom arms, fixed roller attach point
V4.8.1  Reverted risers being removed automatically
==================================
*/
// Namespace: objects
var objects;
(function (objects) {
    // Class: ModelManager
    class ModelManager {
        // empty thingy
        constructor() {
            // modelOrder is essential for maintaining the order of the models to appear on the scene
            this.modelOrder = new Array();
            // string array of the name of the parts of the custom arm build in 'customize-your-arm' 
            this.customArm = new Array();
            // flag that controls if models should be automatically attached to the previous model in the scene
            // set to false this when you want to set the position of a model manually addModel(name, x, y, z);
            this.autoAttach = true;
            // _availableModels is the list of models that are available to use, models in the list expire after a minute if not used again        
            this._availableModels = new Array();
            // _inUseModels is the list of models currently being used in the scene, not necessarily in the order they should appear
            this._inUseModels = new Array();
            // flag that controls if the model's wireframe should be visible
            this._showWireFrame = false;
            // flag that controls if the model's snap/attach points should be visible
            this._showSnapPoints = false;
            // this is to be used in build your system when adding a standard/custom arm so removePrevious(); knows how many times to be called
            // so it should be set to the number of parts added
            this._armPartsCount = 0;
        }
        // selectBase for 'build-your-system' is used to select the model you want to attach other models to
        selectBase(name) {
            var tempModel = null;
            // loop through the models being used to find the one of the passed name, change it's properties and hide the other ones
            this._inUseModels.forEach(model => {
                if (name === model.name && tempModel == null) {
                    tempModel = model;
                    if (tempModel.model3D != null) {
                        tempModel.model3D.traverse(function (child) {
                            if (child.material instanceof THREE.MeshPhongMaterial) {
                                child.material.transparent = true;
                                child.material.opacity = 0.5;
                                child.material.side = THREE.DoubleSide;
                            }
                            if (child.material instanceof Array) {
                                child.material.forEach(mat => {
                                    mat.transparent = true;
                                    mat.opacity = 0.5;
                                    mat.side = THREE.DoubleSide;
                                });
                            }
                        });
                    }
                    tempModel.isSelected = true;
                }
                else {
                    scene.remove(model.model3D);
                    if (this._showSnapPoints) {
                        scene.remove(model.pointOne.point);
                        scene.remove(model.pointTwo.point);
                    }
                    model.isSelected = false;
                }
            });
            // Remove all items from the modelOrder list to add the right parts together
            for (var _x = this.modelOrder.length; _x > 0; _x--) {
                this.modelOrder.pop();
            }
            // The base will always be the first in the list
            tempModel.modelId = 0;
            this.modelOrder.push(tempModel);
            // special case (add table clamp to table)
            if (name === "1004")
                this.addModel("2009");
        }
        modifyBaseAfterLoad(model) {
            model.model3D.traverse(function (child) {
                if (child instanceof THREE.Mesh) {
                    if (child.material instanceof THREE.MeshPhongMaterial) {
                        child.material.transparent = true;
                        child.material.opacity = 0.5;
                        child.material.side = THREE.DoubleSide;
                    }
                    if (child.material instanceof Array) {
                        child.material.forEach(mat => {
                            mat.transparent = true;
                            mat.opacity = 0.5;
                            mat.side = THREE.DoubleSide;
                        });
                    }
                }
            });
        }
        // resetBases for 'build-your-system' add the base models and remove anything attached to them
        resetBases() {
            var currentModel;
            // Loop through the models currently being used and add the base models to the scene otherwise hide them
            this._inUseModels.forEach(model => {
                if (model.name === "1004" || model.name === "manual_chair" || model.name === "power_chair" || model.name === "2021") {
                    scene.add(model.model3D);
                    if (this._showSnapPoints) {
                        scene.add(model.pointOne.point);
                        scene.add(model.pointTwo.point);
                    }
                    model.isSelected = false;
                }
                else {
                    scene.remove(model.model3D);
                    if (this._showSnapPoints) {
                        scene.remove(model.pointOne.point);
                        scene.remove(model.pointTwo.point);
                    }
                }
                currentModel = model;
                // Update the materials
                currentModel.model3D.traverse(function (child) {
                    if (child.material instanceof THREE.MeshPhongMaterial) {
                        child.material.transparent = false;
                        child.material.opacity = 1;
                        child.material.side = THREE.DoubleSide;
                    }
                    if (child.material instanceof Array) {
                        child.material.forEach(mat => {
                            mat.transparent = false;
                            mat.opacity = 1;
                            mat.side = THREE.DoubleSide;
                        });
                    }
                });
            });
            // Update the models being used, remove from being used to available pool
            for (var _x = this._inUseModels.length - 1; _x >= 0; _x--) {
                if (this._inUseModels[_x].name != "1004" && this._inUseModels[_x].name != "manual_chair" && this._inUseModels[_x].name != "power_chair" && this._inUseModels[_x].name != "2021") {
                    this.releaseModel(this._inUseModels[_x]);
                }
            }
        }
        // Save custom arm for 'customize-your-arm' to 'build-your-system'
        // This works by saving an array of names of the parts in the custom arm and saving it to local storage
        saveCustomArm() {
            this.modelOrder.forEach(model => {
                this.customArm.push(model.name);
            });
            window.localStorage.setItem("customArm", JSON.stringify(this.customArm));
        }
        // loadCustomArm used with 'build-your-system' works by reading the locally stored variable and passing it to the addModel(name); function
        loadCustomArm() {
            var customParts = JSON.parse(localStorage.getItem("customArm"));
            if (customParts != null) {
                this._armPartsCount = customParts.length;
                customParts.forEach(name => {
                    this.addModel(name);
                });
            }
            else
                console.log("no saved part!");
        }
        checkCustomArmForWedgeMount() {
            var customParts = JSON.parse(localStorage.getItem("customArm"));
            if (customParts[customParts.length - 1] === "302" && customParts != null)
                return true;
            else
                return false;
        }
        // addModel (name) adds a part to the scene at a default location or automatically attaches the model to the previous one placed
        // addModel (name, x, y, z) places a part at the specificed location if the autoAttach flag is set to false
        // this function adds models to the appropriate pools (inUse, available) and sets the id of the model
        addModel(name, x = 0, y = 0, z = 0) {
            if (this.findByName(name) != null) {
                var m = this.findByName(name);
                if (this.modelOrder.length != 0)
                    m.modelId = this.modelOrder[this.modelOrder.length - 1].modelId + 1;
                else
                    m.modelId = 0;
                this.addToLists(m, x, y, z);
                this.removeFromList(this._availableModels, m);
                return m;
            }
            else {
                var m = new objects.Model(name, this);
                this.addToLists(m, x, y, z);
                return m;
            }
        }
        /*  removePrevious removes the last model in the modelOrder list (or last one put in the scene)
            special cases:
                in 'customize-your-arm' a head is automatically attached to the end of an arm and removePrevious needs to be called in that case removePrevious(true)
                in 'customize-your-arm' a riser should be automatically removed
                in 'build-your'system' an arm (which is multiple parts) is added. before calling remove previous set armPartsCount to the amount of parts that are added
        */
        removePrevious(removeHead = false) {
            if (this.modelOrder.length != 0) {
                if (this.modelOrder.length == 5 && this.modelOrder[this.modelOrder.length - 1].name === "301" && removeHead == true) {
                    this.releaseModel(this.modelOrder[this.modelOrder.length - 1]);
                    this.releaseModel(this.modelOrder[this.modelOrder.length - 1]);
                }
                else if (this.modelOrder.length == 6 && this.modelOrder[this.modelOrder.length - 1].name === "301" && removeHead == true) {
                    this.releaseModel(this.modelOrder[this.modelOrder.length - 1]);
                    this.releaseModel(this.modelOrder[this.modelOrder.length - 1]);
                }
                else {
                    if (this._armPartsCount > 0 && this.modelOrder[this.modelOrder.length - 1].name === "301") {
                        for (var _x = this._armPartsCount; _x > 0; _x--) {
                            this.releaseModel(this.modelOrder[this.modelOrder.length - 1]);
                            this._armPartsCount--;
                        }
                    }
                    else if (this._armPartsCount > 0 && this.modelOrder[this.modelOrder.length - 1].name === "302") {
                        for (var _x = this._armPartsCount; _x > 0; _x--) {
                            this.releaseModel(this.modelOrder[this.modelOrder.length - 1]);
                            this._armPartsCount--;
                        }
                    }
                    else
                        this.releaseModel(this.modelOrder[this.modelOrder.length - 1]);
                }
            }
            else {
                console.log("no models to remove! please stop");
            }
        }
        // removeModel is meant to remove all the models until the one with the specified name is reached (within 'customize-your-arm' > 'standard-arm')
        // currently this is not needed
        removeModel(name) {
            var location = 0;
            var found = false;
            this.modelOrder.forEach(model => {
                if (model.name === name) {
                    location = model.modelId;
                    found = true;
                }
            });
            if (found) {
                for (var _x = this.modelOrder.length - location; _x > 0; _x--) {
                    this.removePrevious();
                }
            }
        }
        // removes all the models except the first one from the scene
        removeAll() {
            for (var _x = this.modelOrder.length; _x > 1; _x--) {
                this.removePrevious();
            }
        }
        // checks if a model with a certain name has been added to the scene
        checkForModel(name) {
            var found = false;
            this._inUseModels.forEach(model => {
                if (model.name === name)
                    found = true;
            });
            return found;
        }
        // loadModel has 2 call back functions (mtlLoader and objLoader) and handles loading the models
        // due to the need to preserve the order of the models and their attach points, it's not recommened to change their properties (except model.model3D)
        // within this method. If you with to do this please do it within addToLists();
        loadModel(model) {
            // Keep a reference to the current object (lost when scope is tightened)
            var thisObject = this;
            this._mtlLoader = new THREE.MTLLoader();
            this._mtlLoader.load(model.mtlPath, function (materials) {
                materials.preload();
                thisObject._objLoader = new THREE.OBJLoader();
                thisObject._objLoader.setMaterials(materials);
                thisObject._objLoader.load(model.objPath, function (object3D) {
                    // Change the materials of the loaded objects
                    object3D.traverse(function (child) {
                        if (child.material instanceof Array) {
                            child.material.forEach(mat => {
                                // If the rgb colour is too low set to a brighter colour (this is to avoid pitch black models)
                                var luminescence = mat.color.r + mat.color.g + mat.color.b;
                                if (thisObject._showWireFrame)
                                    mat.wireframe = true;
                                if (luminescence < 1) {
                                    mat.color = new THREE.Color(0.15, 0.15, 0.15);
                                }
                                mat.side = THREE.DoubleSide;
                            });
                        }
                    });
                    // special cases are set in addToLists
                    // this is for models attaches to 104 which need to be vertical
                    if (model.specialCaseOne == true) {
                        object3D.rotation.z = Math.PI / 2;
                        object3D.rotation.x = Math.PI;
                    }
                    // this is for when 305 is attached to 105, it need to be flipped
                    if (model.specialCaseTwo == true) {
                        object3D.rotation.x = Math.PI;
                    }
                    // this is for plates attached to 302 which need to be horizontal instead of at a 45 degree angle
                    if (model.specialCaseThree == true) {
                        object3D.rotation.z = -Math.PI / 4;
                    }
                    if (thisObject.modelOrder[thisObject.modelOrder.length - 1].specialCaseOne == true) {
                        if (model.name == "5001" || model.name == "5005" || model.name == "5006" || model.name == "5007" || model.name == "5008") {
                            object3D.rotation.z = Math.PI / 2;
                            object3D.rotation.x = Math.PI;
                        }
                    }
                    model.model3D = object3D;
                    model.model3D.position.set(model.position.x, model.position.y, model.position.z);
                    scene.add(model.model3D);
                    thisObject.updateAttachmentPoint(model);
                    if (thisObject._showSnapPoints) {
                        scene.add(model.pointOne.point);
                        scene.add(model.pointTwo.point);
                    }
                    if (model.isSelected == true) {
                        thisObject.modifyBaseAfterLoad(model);
                    }
                    if (model.isSelected == false) {
                        scene.remove(model.model3D);
                    }
                });
            });
        }
        // removes a model from the specified list
        removeFromList(array, model) {
            var index = array.indexOf(model, 0);
            if (index > -1) {
                array.splice(index, 1);
            }
        }
        // moves a model to the available pool and resets certain properties
        releaseModel(model) {
            this._availableModels.push(model);
            this.removeFromList(this._inUseModels, model);
            this.removeFromList(this.modelOrder, model);
            scene.remove(model.model3D);
            scene.remove(model.pointOne.point);
            scene.remove(model.pointTwo.point);
            model.resetTheStuff();
            model.attachedTo = null;
            model.model3D = null;
        }
        // adds models to the inUseModels and modelOrder lists
        addToLists(model, x, y, z) {
            this._inUseModels.push(model);
            this.modelOrder.push(model);
            if (this.autoAttach == true) {
                if (this.modelOrder.length > 1)
                    model.attachTo(this.modelOrder[model.modelId - 1]);
                if (this.modelOrder.length == 1)
                    model.setPosition(17, -10, 0);
                // Special Cases (models attached to 104 and after should be vertical)
                if (model.attachedTo != null) {
                    if (model.attachedTo.name == "104" || this.modelOrder[model.modelId - 1].specialCaseOne == true) {
                        // Please see http://www.math-only-math.com/90-degree-clockwise-rotation.html
                        var newY = (model._attachPoint.x - model.position.x) * -1;
                        var newX = (model._attachPoint.y - model.position.y) * -1;
                        var tempPoint = new Vector3(model.position.x + newX, model.position.y + newY, model._attachPoint.z);
                        model.specialCaseOne = true;
                        model._attachPoint = new Vector3(tempPoint.x, tempPoint.y, tempPoint.z);
                    }
                    if (model.name == "301" && model.attachedTo.name == "105") {
                        model.position.y += 1;
                        var newY = ((model._attachPoint.y - model.position.y) * -1);
                        var tempPoint = new Vector3(model._attachPoint.x, model.position.y + newY, model._attachPoint.z);
                        model._attachPoint = new Vector3(tempPoint.x, tempPoint.y - 1, tempPoint.z);
                        model.specialCaseTwo = true;
                    }
                    if (model.name[0] == "5" && model.name != "5009" && model.attachedTo.name == "302") {
                        model.specialCaseThree = true;
                        model.position.y += 1;
                    }
                }
            }
            else {
                model.setPosition(x, y, z);
            }
            this.loadModel(model);
        }
        // returns a model of the specified name in the availableModels list
        findByName(modelName) {
            var foundModel = null;
            this._availableModels.forEach(model => {
                if (model.name === modelName && foundModel == null) {
                    foundModel = model;
                }
            });
            return foundModel;
        }
        // used to update the attachment points of a model
        updateAttachmentPoint(model) {
            model.pointTwo.setPosition(new THREE.Vector3(model._attachPoint.x, model._attachPoint.y, model._attachPoint.z));
            model.pointOne.setPosition(new THREE.Vector3(model.position.x, model.position.y, model.position.z));
        }
        // keeps track of and removes models that aren't being used in the availableModels list
        update() {
            this._availableModels.forEach(model => {
                if (model.expireTimer > 0) {
                    model.expireTimer--;
                }
                else {
                    this.removeFromList(this._availableModels, model);
                    model.id = null;
                    model.modelId = null;
                    model.model3D = null;
                    model.position = null;
                    model.name = null;
                    model.attachTo = null;
                    model.pointOne = null;
                    model.pointTwo = null;
                    model.objPath = null;
                    model.mtlPath = null;
                    model._attachPoint = null;
                    model.expireTimer = null;
                    model.specialCaseOne = null;
                    model.specialCaseTwo = null;
                    model.specialCaseThree = null;
                }
            });
            this._inUseModels.forEach(model => {
                model.update();
            });
        }
    }
    objects.ModelManager = ModelManager;
})(objects || (objects = {}));
//# sourceMappingURL=modelManager.js.map