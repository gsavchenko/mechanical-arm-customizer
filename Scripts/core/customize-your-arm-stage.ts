/// <reference path="_reference.ts"/>

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
import gameObject = objects.gameObject;

var scene: Scene;
var renderer: Renderer;
var camera: OrthographicCamera;
var axes: AxisHelper;
var ambientLight: AmbientLight;
var spotLight: SpotLight;
var directionLight: DirectionalLight;
var stats: Stats;
var canvas: HTMLElement;
var cameraControls: THREE.TrackballControls;

var enableCameraControls:boolean = false;
var enableAxisHelper:boolean = false;
var enableStats:boolean = false;

var testModel:objects.Model;
var testModel2:objects.Model;

var modelManager:objects.ModelManager;
var canvasWidth:number = 1180;
var canvasHeight:number = 715;

function preload(){
    
    modelManager = new objects.ModelManager();
    //modelManager.addModel("101");
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
    if(enableAxisHelper){
        axes = new AxisHelper(20);
        scene.add(axes);
    }
    
    window.addEventListener('resize', onResize, false);
    gameLoop(); // render the scene	
}

function onResize(): void {
    //camera.aspect = canvasWidth / canvasHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(canvasWidth, canvasHeight);
}

function setupRenderer(): void {
    canvas = document.getElementById("customize-your-arm-canvas");

    renderer = new Renderer({antialias: true});  
    renderer.setClearColor(0xEEEEEE, 1.0);
    renderer.setSize(canvasWidth, canvasHeight);
    renderer.shadowMap.enabled = true;

    canvas.appendChild(renderer.domElement);    
}

function setupCamera(): void {
    //camera = new PerspectiveCamera(60, canvasWidth / canvasHeight, 0.3, 1000);    
    
    camera = new THREE.OrthographicCamera( canvasWidth / -60, canvasWidth / 60, canvasHeight / 60, canvasHeight / -60, 1, 1000 );   
    camera.position.x = 0;
    camera.position.y = 6;
    camera.position.z = 15;
    camera.lookAt(new Vector3(0, 0, 0));
    addCameraControls(camera);
}

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

function gameLoop(): void {   
    requestAnimationFrame(gameLoop);
    render();

    // modelManager.update();
    
    if(enableCameraControls)
        cameraControls.update();
}

function render(){
    renderer.render(scene, camera);

    if(enableStats)
        stats.update();
}
