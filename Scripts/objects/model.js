/// <reference path="../../typings/tsd.d.ts"/>
/* ===============================
AUTHOR:         George Savchenko
CREATE DATE:    20/04/2017
PURPOSE:        Represents a model and its attachment points
SPECIAL NOTES:  The information of the model is stored before being set to the actual 3D model and some extra
                information is stored here like attachment points
================================
Change History:
V3.9    Documented code
V4.5    Added an isLoaded variable and update() method to keep track of when the model is loaded without the use
        of Promise functions (the load methods uses 2 callback functions from the THREE.JS library)
==================================
*/
// Namespace: objects
var objects;
(function (objects) {
    // Class: Model
    class Model {
        // this constructor accepts the name of the model and the current instance of the model manager
        constructor(name, modelManager) {
            // special case one is for models that are attached to model 104 which need to be vertical
            this.specialCaseOne = false;
            // special case two is for when 301 is attached to 105. 301 needs to be flipped
            this.specialCaseTwo = false;
            // special case three is for 5000 series models that are attached to 302. these need to be horizontal instead of 45 degrees
            this.specialCaseThree = false;
            // represents the timer that determines when the model should be 'deleted' (remove all its references and hope the garbage collector gets it)
            this.expireTimer = 3600;
            // represents if a model is loaded
            this.isLoaded = false;
            this.name = name;
            if (this.id == 0) {
                this.modelId = this.id;
                this.id++;
            }
            else {
                if (modelManager.modelOrder.length != 0)
                    this.modelId = (modelManager.modelOrder[(modelManager.modelOrder.length - 1)].modelId + 1);
                else
                    this.modelId = 0;
            }
            this.resetTheStuff();
        }
        get id() { return Model.ID; }
        set id(val) { Model.ID = val; }
        // sets the properties of the models based on the name that's passed
        setProperties() {
            switch (this.name) {
                case "101":
                    this._attachPoint = new Vector3(-2.75, 0, 0);
                    this.objPath = "models/101.obj";
                    this.mtlPath = "models/101.mtl";
                    break;
                case "102":
                    this._attachPoint = new Vector3(0, 1.13, 0);
                    this.objPath = "models/102.obj";
                    this.mtlPath = "models/102.mtl";
                    break;
                case "103":
                    this._attachPoint = new Vector3(0, 3, 0);
                    this.objPath = "models/103.obj";
                    this.mtlPath = "models/103.mtl";
                    break;
                case "104":
                    this._attachPoint = new Vector3(-0.45, 1.4, 0);
                    this.objPath = "models/104.obj";
                    this.mtlPath = "models/104.mtl";
                    break;
                case "105":
                    this._attachPoint = new Vector3(0, 0.55, 0);
                    this.objPath = "models/105.obj";
                    this.mtlPath = "models/105.mtl";
                    break;
                case "201":
                    this._attachPoint = new Vector3(-5.65, 0.9, 0);
                    this.objPath = "models/201.obj";
                    this.mtlPath = "models/201.mtl";
                    break;
                case "202":
                    this._attachPoint = new Vector3(-3.915, 8.4, 0);
                    this.objPath = "models/202.obj";
                    this.mtlPath = "models/202.mtl";
                    break;
                case "203":
                    this._attachPoint = new Vector3(-9.05, 6.46, 0);
                    this.objPath = "models/203.obj";
                    this.mtlPath = "models/203.mtl";
                    break;
                case "204":
                    this._attachPoint = new Vector3(-9.05, 6.46, 0);
                    this.objPath = "models/204.obj";
                    this.mtlPath = "models/204.mtl";
                    break;
                case "205":
                    this._attachPoint = new Vector3(-9.05, 6.46, 0);
                    this.objPath = "models/205.obj";
                    this.mtlPath = "models/205.mtl";
                    break;
                case "206":
                    this._attachPoint = new Vector3(-4, 5.24, 0);
                    this.objPath = "models/206.obj";
                    this.mtlPath = "models/206.mtl";
                    break;
                case "207":
                    this._attachPoint = new Vector3(0, 0.87, 1.8);
                    this.objPath = "models/207.obj";
                    this.mtlPath = "models/207.mtl";
                    break;
                case "301":
                    this._attachPoint = new Vector3(-1.85, 0.4, 0);
                    this.objPath = "models/301.obj";
                    this.mtlPath = "models/301.mtl";
                    break;
                case "302":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/302.obj";
                    this.mtlPath = "models/302.mtl";
                    break;
                case "1001":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/1001.obj";
                    this.mtlPath = "models/1001.mtl";
                    break;
                case "1002":
                    this._attachPoint = new Vector3(5, 0, 0);
                    this.objPath = "models/1002.obj";
                    this.mtlPath = "models/1002.mtl";
                    break;
                case "1004":
                    this._attachPoint = new Vector3(3, 0, 0);
                    this.objPath = "models/1004.obj";
                    this.mtlPath = "models/1004.mtl";
                    break;
                case "1005":
                    this._attachPoint = new Vector3(5, 0, 0);
                    this.objPath = "models/1005.obj";
                    this.mtlPath = "models/1005.mtl";
                    break;
                case "1006":
                    this._attachPoint = new Vector3(5, 0, 0);
                    this.objPath = "models/1006.obj";
                    this.mtlPath = "models/1006.mtl";
                    break;
                case "1007":
                    this._attachPoint = new Vector3(5, 0, 0);
                    this.objPath = "models/1007.obj";
                    this.mtlPath = "models/1007.mtl";
                    break;
                case "1008":
                    this._attachPoint = new Vector3(5, 0, 0);
                    this.objPath = "models/1008.obj";
                    this.mtlPath = "models/1008.mtl";
                    break;
                case "1009":
                    this._attachPoint = new Vector3(5, 0, 0);
                    this.objPath = "models/1009.obj";
                    this.mtlPath = "models/1009.mtl";
                    break;
                case "1010":
                    this._attachPoint = new Vector3(5, 0, 0);
                    this.objPath = "models/1010.obj";
                    this.mtlPath = "models/1010.mtl";
                    break;
                case "2001":
                    this._attachPoint = new Vector3(0, 0.75, 1.35);
                    this.objPath = "models/2001.obj";
                    this.mtlPath = "models/2001.mtl";
                    break;
                case "2002":
                    this._attachPoint = new Vector3(0, 1.1, 3.25);
                    this.objPath = "models/2002.obj";
                    this.mtlPath = "models/2002.mtl";
                    break;
                case "2003":
                    this._attachPoint = new Vector3(0, 0, 2.75);
                    this.objPath = "models/2003.obj";
                    this.mtlPath = "models/2003.mtl";
                    break;
                case "2004":
                    this._attachPoint = new Vector3(0, 0, 2.75);
                    this.objPath = "models/2004.obj";
                    this.mtlPath = "models/2004.mtl";
                    break;
                case "2005":
                    this._attachPoint = new Vector3(0, 0, 2.75);
                    this.objPath = "models/2005.obj";
                    this.mtlPath = "models/2005.mtl";
                    break;
                case "2006":
                    this._attachPoint = new Vector3(0, 0, 2.75);
                    this.objPath = "models/2006.obj";
                    this.mtlPath = "models/2006.mtl";
                    break;
                case "2007":
                    this._attachPoint = new Vector3(0, -0.1, 2.7);
                    this.objPath = "models/2007.obj";
                    this.mtlPath = "models/2007.mtl";
                    break;
                case "2008":
                    this._attachPoint = new Vector3(-2.55, 0.75, 1.3);
                    this.objPath = "models/2008.obj";
                    this.mtlPath = "models/2008.mtl";
                    break;
                case "2009":
                    this._attachPoint = new Vector3(0, 2.25, 0);
                    this.objPath = "models/2009.obj";
                    this.mtlPath = "models/2009.mtl";
                    break;
                case "2010":
                    this._attachPoint = new Vector3(0, 0, 3.5);
                    this.objPath = "models/2010.obj";
                    this.mtlPath = "models/2010.mtl";
                    break;
                case "2011":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/2011.obj";
                    this.mtlPath = "models/2011.mtl";
                    break;
                case "2012":
                    this._attachPoint = new Vector3(-2, 0.5, 0);
                    this.objPath = "models/2012.obj";
                    this.mtlPath = "models/2012.mtl";
                    break;
                case "2013":
                    this._attachPoint = new Vector3(-2, -.5, 0);
                    this.objPath = "models/2013.obj";
                    this.mtlPath = "models/2013.mtl";
                    break;
                case "2014":
                    this._attachPoint = new Vector3(-4.4, 1.30, 1.40);
                    this.objPath = "models/2014.obj";
                    this.mtlPath = "models/2014.mtl";
                    break;
                case "2015":
                    this._attachPoint = new Vector3(0, 1.1, 3.25);
                    this.objPath = "models/2015.obj";
                    this.mtlPath = "models/2015.mtl";
                    break;
                case "2016":
                    this._attachPoint = new Vector3(0, 0.7, -1);
                    this.objPath = "models/2016.obj";
                    this.mtlPath = "models/2016.mtl";
                    break;
                case "2017":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/2017.obj";
                    this.mtlPath = "models/2017.mtl";
                    break;
                case "2018":
                    this._attachPoint = new Vector3(-4.4, 1.35, 0);
                    this.objPath = "models/2018.obj";
                    this.mtlPath = "models/2018.mtl";
                    break;
                case "2019":
                    this._attachPoint = new Vector3(-7.4, 1.35, 0);
                    this.objPath = "models/2019.obj";
                    this.mtlPath = "models/2019.mtl";
                    break;
                case "2020":
                    this._attachPoint = new Vector3(-5.4, 1.35, 0);
                    this.objPath = "models/2020.obj";
                    this.mtlPath = "models/2020.mtl";
                    break;
                case "2021":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/2021.obj";
                    this.mtlPath = "models/2021.mtl";
                    break;
                case "2023":
                    this._attachPoint = new Vector3(0, 2.8, -4.4);
                    this.objPath = "models/2023.obj";
                    this.mtlPath = "models/2023.mtl";
                    break;
                case "2024":
                    this._attachPoint = new Vector3(0, 2, -2.8);
                    this.objPath = "models/2024.obj";
                    this.mtlPath = "models/2024.mtl";
                    break;
                case "2025":
                    this._attachPoint = new Vector3(0, 8.05, 0);
                    this.objPath = "models/2025.obj";
                    this.mtlPath = "models/2025.mtl";
                    break;
                case "2026":
                    this._attachPoint = new Vector3(0, 16, 0);
                    this.objPath = "models/2026.obj";
                    this.mtlPath = "models/2026.mtl";
                    break;
                case "3003":
                    this._attachPoint = new Vector3(-4.8, 1.35, 0);
                    this.objPath = "models/3003.obj";
                    this.mtlPath = "models/3003.mtl";
                    break;
                case "3004":
                    this._attachPoint = new Vector3(-7.15, 1.35, 0);
                    this.objPath = "models/3004.obj";
                    this.mtlPath = "models/3004.mtl";
                    break;
                case "3005":
                    this._attachPoint = new Vector3(0, 3, 0);
                    this.objPath = "models/3005.obj";
                    this.mtlPath = "models/3005.mtl";
                    break;
                case "3006":
                    this._attachPoint = new Vector3(0, 4, 0);
                    this.objPath = "models/3006.obj";
                    this.mtlPath = "models/3006.mtl";
                    break;
                case "3007":
                    this._attachPoint = new Vector3(0, 10.05, 0);
                    this.objPath = "models/3007.obj";
                    this.mtlPath = "models/3007.mtl";
                    break;
                case "3008":
                    this._attachPoint = new Vector3(0, 6, 0);
                    this.objPath = "models/3008.obj";
                    this.mtlPath = "models/3008.mtl";
                    break;
                case "3009":
                    this._attachPoint = new Vector3(0, 8, 0);
                    this.objPath = "models/3009.obj";
                    this.mtlPath = "models/3009.mtl";
                    break;
                case "3011":
                    this._attachPoint = new Vector3(-4.6, 1.2, 0.0);
                    this.objPath = "models/3011.obj";
                    this.mtlPath = "models/3011.mtl";
                    break;
                case "3012":
                    this._attachPoint = new Vector3(-8.5, 9.65, 0);
                    this.objPath = "models/3012.obj";
                    this.mtlPath = "models/3012.mtl";
                    break;
                case "3013":
                    this._attachPoint = new Vector3(-14.85, 3.25, -5);
                    this.objPath = "models/3013.obj";
                    this.mtlPath = "models/3013.mtl";
                    break;
                case "3014":
                    this._attachPoint = new Vector3(-17.75, 11.5, 7.55);
                    this.objPath = "models/3014.obj";
                    this.mtlPath = "models/3014.mtl";
                    break;
                case "3015":
                    this._attachPoint = new Vector3(-17.5, 14.1, 2.1);
                    this.objPath = "models/3015.obj";
                    this.mtlPath = "models/3015.mtl";
                    break;
                case "3016":
                    this._attachPoint = new Vector3(-16.55, 14.05, 5);
                    this.objPath = "models/3016.obj";
                    this.mtlPath = "models/3016.mtl";
                    break;
                case "3017":
                    this._attachPoint = new Vector3(-16.55, 14.05, 5);
                    this.objPath = "models/3017.obj";
                    this.mtlPath = "models/3017.mtl";
                    break;
                case "4001":
                    this._attachPoint = new Vector3(-1.4, 1.4, 0.25);
                    this.objPath = "models/4001.obj";
                    this.mtlPath = "models/4001.mtl";
                    break;
                case "4002":
                    this._attachPoint = new Vector3(-1.1, 1.1, 0);
                    this.objPath = "models/4002.obj";
                    this.mtlPath = "models/4002.mtl";
                    break;
                case "4003":
                    this._attachPoint = new Vector3(-1.68, 1.6, 0.05);
                    this.objPath = "models/4003.obj";
                    this.mtlPath = "models/4003.mtl";
                    break;
                case "4004":
                    this._attachPoint = new Vector3(0, 0.98, 0);
                    this.objPath = "models/4004.obj";
                    this.mtlPath = "models/4004.mtl";
                    break;
                case "5001":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/5001.obj";
                    this.mtlPath = "models/5001.mtl";
                    break;
                case "5002":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/5002.obj";
                    this.mtlPath = "models/5002.mtl";
                    break;
                case "5003":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/5003.obj";
                    this.mtlPath = "models/5003.mtl";
                    break;
                case "5005":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/5005.obj";
                    this.mtlPath = "models/5005.mtl";
                    break;
                case "5006":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/5006.obj";
                    this.mtlPath = "models/5006.mtl";
                    break;
                case "5007":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/5007.obj";
                    this.mtlPath = "models/5007.mtl";
                    break;
                case "5008":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/5008.obj";
                    this.mtlPath = "models/5008.mtl";
                    break;
                case "5009":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/5009.obj";
                    this.mtlPath = "models/5009.mtl";
                    break;
                case "manual_chair":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/manual_chair.obj";
                    this.mtlPath = "models/manual_chair.mtl";
                    break;
                case "power_chair":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/power_chair.obj";
                    this.mtlPath = "models/power_chair.mtl";
                    break;
                case "floor":
                    this._attachPoint = new Vector3(0, 0, 0);
                    this.objPath = "models/floor.obj";
                    this.mtlPath = "models/floor.mtl";
                    break;
            }
        }
        // updates the attachment points for this model
        updateAttachPoint() {
            this.pointTwo.setPosition(new THREE.Vector3(this._attachPoint.x + this.pointTwo.point.position.x, this._attachPoint.y + this.pointTwo.point.position.y, this._attachPoint.z + this.pointTwo.point.position.z));
        }
        // used to update the position of the models and attachment points relative to the model it's attached to
        attachTo(model) {
            this.position.set(model._attachPoint.x, model._attachPoint.y, model._attachPoint.z);
            // don't updated the points if this model is being attached to the same model it was previously
            // this is to avoid updating the attachment point positions when the method is called 2 times in a row
            if (!(this.attachedTo === model)) {
                this.pointOne.setPosition(new THREE.Vector3(this.position.x + this.pointOne.point.position.x, this.position.y + this.pointOne.point.position.y, this.position.z + this.pointOne.point.position.z));
                this.pointTwo.setPosition(new THREE.Vector3(this._attachPoint.x + this.pointTwo.point.position.x, this._attachPoint.y + this.pointTwo.point.position.y, this._attachPoint.z + this.pointTwo.point.position.z));
                this._attachPoint.set(this.position.x + this._attachPoint.x, this.position.y + this._attachPoint.y, this.position.z + this._attachPoint.z);
                this.attachedTo = model;
            }
        }
        // Sets some essential properties to their original values
        resetTheStuff() {
            this.setProperties();
            this.pointOne = new objects.SnapPoint(0xffff00);
            this.pointTwo = new objects.SnapPoint(0x39FF14);
            this.position = new THREE.Vector3(0, 0, 0);
            this.specialCaseOne = false;
            this.specialCaseTwo = false;
            this.specialCaseThree = false;
            this.isLoaded = false;
            this.resetTimer();
        }
        // set the position of a model
        setPosition(x, y, z) {
            this.position.set(x, y, z);
            this._attachPoint.set(this.position.x + this._attachPoint.x, this.position.y + this._attachPoint.y, this.position.z + this._attachPoint.z);
        }
        // deep clone an object to avoid storing it in a new variable by reference
        getModelObjectCopy() {
            return this.model3D.clone();
        }
        // update method runs every frame, is called from the ModelManagers updateMethod
        update() {
            if (this.model3D != null && this.isLoaded == false) {
                //console.log("loaded");
                this.isLoaded = true;
            }
        }
        // reset the timer that tracks how long a model has been in the available models list without being called again
        resetTimer() {
            this.expireTimer = 3600;
        }
    }
    // every model has an id that is shared between all instances (essential for maintaining model order)
    // however, it's only used to set the first models id
    Model.ID = 0;
    objects.Model = Model;
})(objects || (objects = {}));
//# sourceMappingURL=model.js.map