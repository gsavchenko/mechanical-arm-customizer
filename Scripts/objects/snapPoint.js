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
var objects;
(function (objects) {
    class SnapPoint {
        // constructor accepts the colour of the point
        constructor(colour) {
            this._pointGeometry = new THREE.SphereGeometry(0.1, 32, 32);
            this._pointMaterial = new THREE.MeshBasicMaterial({ color: colour });
            this.point = new THREE.Mesh(this._pointGeometry, this._pointMaterial);
            this.point.position.x = 0;
            this.point.position.y = 0;
            this.point.position.z = 0;
        }
        // set the position of the point
        setPosition(position) {
            this.point.position.set(position.x, position.y, position.z);
        }
    }
    objects.SnapPoint = SnapPoint;
})(objects || (objects = {}));
//# sourceMappingURL=snapPoint.js.map