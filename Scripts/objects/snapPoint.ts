/// <reference path="../../typings/tsd.d.ts"/>
/* ===============================
AUTHOR:          George Savchenko
CREATE DATE:     20/04/2017
PURPOSE:         Used to create visual indicators of the attach points of a model
================================
Change History:  
V4.0 Documented code  
==================================
*/
module objects {
    export class SnapPoint{
        // stores the mesh for the point
        public point:THREE.Mesh;
        // stores the geometry of the point
        private _pointGeometry:THREE.SphereGeometry;
        // stores the material of the point
        private _pointMaterial:THREE.MeshBasicMaterial;

        // constructor accepts the colour of the point
        constructor(colour:number) {            
            this._pointGeometry = new THREE.SphereGeometry( 0.1, 32, 32);
            this._pointMaterial = new THREE.MeshBasicMaterial( {color: colour} );
            this.point = new THREE.Mesh( this._pointGeometry, this._pointMaterial );

            this.point.position.x = 0;
            this.point.position.y = 0;
            this.point.position.z = 0; 
        }

        // set the position of the point
        public setPosition(position:THREE.Vector3): void{
            this.point.position.set(position.x, position.y, position.z);
        }
    }
}
