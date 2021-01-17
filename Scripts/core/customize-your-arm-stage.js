/// <reference path="_reference.ts"/>
var Scene = THREE.Scene;
var Renderer = THREE.WebGLRenderer;
var PerspectiveCamera = THREE.PerspectiveCamera;
var OrthographicCamera = THREE.OrthographicCamera;
var AxisHelper = THREE.AxisHelper;
var SpotLight = THREE.DirectionalLight;
var PointLight = THREE.PointLight;
var AmbientLight = THREE.AmbientLight;
var DirectionalLight = THREE.DirectionalLight;
var Vector3 = THREE.Vector3;
var gameObject = objects.gameObject;
var scene;
var renderer;
var camera;
var axes;
var ambientLight;
var spotLight;
var directionLight;
var stats;
var canvas;
var cameraControls;
var enableCameraControls = false;
var enableAxisHelper = false;
var enableStats = false;
var testModel;
var testModel2;
var modelManager;
var canvasWidth = 1180;
var canvasHeight = 715;
function preload() {
    modelManager = new objects.ModelManager();
    modelManager.addModel("101");
    //modelManager.addModel("204");
    //modelManager.addModel("206");
    //modelManager.addModel("301");
    init();
}
function init() {
    console.log("start init");
    scene = new Scene();
    setupRenderer();
    setupCamera();
    ambientLight = new AmbientLight(0x090909);
    scene.add(ambientLight);
    spotLight = new SpotLight(0xffffff);
    spotLight.position.set(0, 10, 12);
    spotLight.castShadow = true;
    scene.add(spotLight);
    addStatsObject();
    if (enableAxisHelper) {
        axes = new AxisHelper(20);
        scene.add(axes);
    }
	if(canvas != null){
    window.addEventListener('resize', onResize, false);
    gameLoop(); // render the scene
	}
}
function onResize() {
    //camera.aspect = canvasWidth / canvasHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(canvasWidth, canvasHeight);
}
function setupRenderer() {
    canvas = document.getElementById("customize-your-arm-canvas");
	if(canvas != null){
    renderer = new Renderer({ antialias: true });
    renderer.setClearColor(0xEEEEEE, 1.0);
    renderer.setSize(canvasWidth, canvasHeight);
    renderer.shadowMap.enabled = true;
    canvas.appendChild(renderer.domElement);
	}
}
function setupCamera() {
    //camera = new PerspectiveCamera(60, canvasWidth / canvasHeight, 0.3, 1000);    
    camera = new THREE.OrthographicCamera(canvasWidth / -56, canvasWidth / 56, canvasHeight / 56, canvasHeight / -56, 1, 1000);
    camera.position.x = 0;
    camera.position.y = 6;
    camera.position.z = 15;
    camera.lookAt(new Vector3(0, 0, 0));
    addCameraControls(camera);
}
function addStatsObject() {
    if (enableStats) {
        stats = new Stats();
        stats.setMode(0);
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.left = '0px';
        stats.domElement.style.top = '0px';
        document.body.appendChild(stats.domElement);
    }
}
function addCameraControls(camera) {
    if (enableCameraControls) {
        cameraControls = new THREE.TrackballControls(camera);
        cameraControls.rotateSpeed = 5.0;
        cameraControls.zoomSpeed = 1.2;
        cameraControls.panSpeed = 0.8;
        cameraControls.noZoom = false;
        cameraControls.noPan = false;
        cameraControls.staticMoving = true;
        cameraControls.dynamicDampingFactor = 0.3;
        cameraControls.keys = [65, 83, 68];
        cameraControls.addEventListener('change', render);
    }
}
function gameLoop() {
    requestAnimationFrame(gameLoop);
    render();
    // modelManager.update();
    if (enableCameraControls)
        cameraControls.update();
}
function render() {
    renderer.render(scene, camera);
    if (enableStats)
        stats.update();
}
//# sourceMappingURL=customize-your-arm-stage.js.map