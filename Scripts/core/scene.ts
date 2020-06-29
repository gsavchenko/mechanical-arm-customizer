/// <reference path="_reference.ts"/>
/* ===============================
AUTHOR:          George Savchenko
CREATE DATE:     20/04/2017
PURPOSE:         Used to create the scene/canvas to display
================================
Change History:  
V4.0 Documented code
V4.2 The scene will only start loading if a div of the specified names are found
V4.6 Added loading image
==================================
*/
// import libraries
import Scene = THREE.Scene;
import Renderer = THREE.WebGLRenderer;
import PerspectiveCamera = THREE.PerspectiveCamera;
import OrthographicCamera = THREE.OrthographicCamera;
import AxisHelper = THREE.AxisHelper;
import SpotLight = THREE.DirectionalLight;
import PointLight = THREE.PointLight;
import AmbientLight = THREE.AmbientLight;
import DirectionalLight = THREE.DirectionalLight;
import Vector3 = THREE.Vector3;

// variable declaration
var scene: Scene;
var renderer: Renderer;
var camera:any;
var axes: AxisHelper;
var ambientLight: AmbientLight;
var spotLight: SpotLight;
var directionLight: DirectionalLight;
var stats: Stats;
var canvas: HTMLElement;
var cameraControls: THREE.TrackballControls;
var modelManager:objects.ModelManager;
var canvasWidth:number = 1180;
var canvasHeight:number = 715;
var canvasName:string;
var loadingModel:boolean = false;

// control loading divs
var loadingGifDiv:any;
var blockButtonsDiv:any;

// debug tools
var enableCameraControls:boolean = false;
var enableAxisHelper:boolean = false;
var enableStats:boolean = false;

// initialize scene and variables
function preload() {
    
    modelManager = new objects.ModelManager();
    scene = new Scene();

    setupRenderer();  
    if(canvas != null){

        ambientLight = new AmbientLight(0x090909);
        scene.add(ambientLight);
        
        spotLight = new SpotLight(0xffffff);
        spotLight.position.set(-20, 25, -20);
        spotLight.castShadow = true;
        scene.add(spotLight);

        // setup scene based on which div is loaded
        switch(canvasName){
            case "customize-your-arm-canvas":
                changeCameraFocus("customize-your-arm");
                modelManager.addModel("101");
            break;
                case "build-your-system-canvas":
                changeCameraFocus("build-your-system");
                modelManager.autoAttach = false;
                modelManager.addModel("1004", 0, 5, -80);        
                modelManager.addModel("manual_chair", 0, -8, -30);
                modelManager.addModel("power_chair", 15, -5, 4);
                modelManager.addModel("2021", 20, -18, 25);
                modelManager.autoAttach = true;
            break;
        }

        addStatsObject();

        if(enableAxisHelper){
            axes = new AxisHelper(20);
            scene.add(axes);
        }
        
            // hookup onResize to the event listener        
            window.addEventListener('resize', onResize, false);
            gameLoop(); // render the scene	
        }
    }

    // set the camera the appropriate size (stays the same though)
    function onResize(): void {
        camera.aspect = canvasWidth / canvasHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(canvasWidth, canvasHeight);
    }

    // set renderer properties
    function setupRenderer(): void {

    if(canvas == null){
        canvas = document.getElementById("customize-your-arm-canvas");
        canvasName = "customize-your-arm-canvas";

        if(canvas == null){
            canvas = document.getElementById("build-your-system-canvas");
            canvasName = "build-your-system-canvas";
        }
    }

    if(loadingGifDiv == null){
        loadingGifDiv = document.getElementById("loadinggif");
        blockButtonsDiv = document.getElementById("backgropdiv");
    }

    renderer = new Renderer({antialias: true});  
    renderer.setClearColor(0xEEEEEE, 1.0);
    renderer.setSize(canvasWidth, canvasHeight);
    renderer.shadowMap.enabled = true;

    if(canvas != null)
        canvas.appendChild(renderer.domElement);    
}

// change camera properties based on the objects/scene you're looking at
function changeCameraFocus(name:string){
    switch(name){
        case "customize-your-arm":
            //camera = new PerspectiveCamera(60, canvasWidth / canvasHeight, 0.3, 1000);    
            camera = new THREE.OrthographicCamera(canvasWidth / -54, canvasWidth / 54, canvasHeight / 54, canvasHeight / -54, 1, 1000);
            camera.position.x = 0;
            camera.position.y = 6;
            camera.position.z = -15;
            camera.lookAt(new Vector3(0, 0, 0));
            break;
        case "build-your-system":
            spotLight.position.set(-20, 25, 20);
            camera = new PerspectiveCamera(35, canvasWidth / canvasHeight, 0.3, 1000);
            camera.position.x = -160;
            camera.position.y = 40;
            camera.position.z = 65;
            camera.lookAt(new Vector3(0, 0, 5));
            addCameraControls(camera);
            modelManager.resetBases();
            break;
        case "1004":
            camera = new PerspectiveCamera(35, canvasWidth / canvasHeight, 0.3, 1000);
            camera.position.x = -100;
            camera.position.y = 35;
            camera.position.z = 20;
            camera.lookAt(new Vector3(60, 10, -80));
            addCameraControls(camera);
            modelManager.selectBase("1004");
            break;
        case "manual_chair":
            camera = new PerspectiveCamera(35, canvasWidth / canvasHeight, 0.3, 1000);
            camera.position.x = -70;
            camera.position.y = 33;
            camera.position.z = 45;
            camera.lookAt(new Vector3(30, -4, -45));
            addCameraControls(camera);
            modelManager.selectBase("manual_chair");
            break;
        case "power_chair":
            camera = new PerspectiveCamera(35, canvasWidth / canvasHeight, 0.3, 1000);
            camera.position.x = -80;
            camera.position.y = 45;
            camera.position.z = 100;
            camera.lookAt(new Vector3(50, 0, -11));
            addCameraControls(camera);
            modelManager.selectBase("power_chair");
            break;
        case "2021":
            camera = new PerspectiveCamera(35, canvasWidth / canvasHeight, 0.3, 1000);
            camera.position.x = -80;
            camera.position.y = 15;
            camera.position.z = 70;
            camera.lookAt(new Vector3(120, 2, -15));
            addCameraControls(camera);
            modelManager.selectBase("2021");
            break;
    }
    addCameraControls(camera);
}

// adds the stats of the scene if enableStats flag is true
function addStatsObject() {
    if(enableStats){
        stats = new Stats();
        stats.setMode(0);
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.left = '0px';
        stats.domElement.style.top = '0px';
        document.body.appendChild(stats.domElement);
    }
}

// adds functionality to control the camera if enableCameraControls is true
function addCameraControls(camera:THREE.Camera){
        if(enableCameraControls) { // Note: TrackBallControls overrides the lookAt(); function
        cameraControls = new THREE.TrackballControls(camera);
        cameraControls.rotateSpeed = 5.0;
        cameraControls.zoomSpeed = 1.2;
        cameraControls.panSpeed = 0.8;
        cameraControls.noZoom = false;
        cameraControls.noPan = false;
        cameraControls.staticMoving = true;
        cameraControls.dynamicDampingFactor = 0.3;
        cameraControls.keys = [ 65, 83, 68 ];
        cameraControls.addEventListener('change', render);
    }
}

// main loop
function gameLoop(): void {   
    requestAnimationFrame(gameLoop);
    render();

    modelManager.update();

    if (loadingGifDiv != null) {
        var anyLoading;
        anyLoading = false;

        modelManager.modelOrder.forEach(model => {
            if(!model.isLoaded)
                anyLoading = true;
        });

        // ignore TypeScript warnings
        switch(anyLoading){
            case true:
                $(loadingGifDiv).show();
                $(blockButtonsDiv).show();
                loadingModel = true;
                break;
            case false:
                 $(loadingGifDiv).hide();
                 $(blockButtonsDiv).hide();
                loadingModel = false;
                break;
        }
    }

    
    if(enableCameraControls)
        cameraControls.update();
}

// renders scene
function render(){
    renderer.render(scene, camera);

    if(enableStats)
        stats.update();
}
