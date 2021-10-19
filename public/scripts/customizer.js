/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunksage"] = self["webpackChunksage"] || []).push([["/scripts/customizer"],{

/***/ "./resources/scripts/customizer.js":
/*!*****************************************!*\
  !*** ./resources/scripts/customizer.js ***!
  \*****************************************/
/***/ (function(__unused_webpack_module, __unused_webpack_exports, __webpack_require__) {

eval("/* provided dependency */ var $ = __webpack_require__(/*! jquery */ \"jquery\");\n/**\n * This file allows you to add functionality to the Theme Customizer\n * live preview. jQuery is readily available.\n *\n * {@link https://codex.wordpress.org/Theme_Customization_API}\n */\n\n/**\n * Change the blog name value.\n *\n * @param {string} value\n */\nwp.customize('blogname', function (value) {\n  value.bind(function (to) {\n    return $('.brand').text(to);\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9zYWdlLy4vcmVzb3VyY2VzL3NjcmlwdHMvY3VzdG9taXplci5qcz84NDgzIl0sIm5hbWVzIjpbIndwIiwidmFsdWUiLCIkIl0sIm1hcHBpbmdzIjoiO0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQUEsRUFBRSxDQUFGQSxzQkFBeUIsaUJBQVM7QUFDaENDLE9BQUssQ0FBTEEsS0FBVyxjQUFFO0FBQUEsV0FBSUMsQ0FBQyxDQUFEQSxRQUFDLENBQURBLE1BQUosRUFBSUEsQ0FBSjtBQUFiRDtBQURGRCIsImZpbGUiOiIuL3Jlc291cmNlcy9zY3JpcHRzL2N1c3RvbWl6ZXIuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKipcbiAqIFRoaXMgZmlsZSBhbGxvd3MgeW91IHRvIGFkZCBmdW5jdGlvbmFsaXR5IHRvIHRoZSBUaGVtZSBDdXN0b21pemVyXG4gKiBsaXZlIHByZXZpZXcuIGpRdWVyeSBpcyByZWFkaWx5IGF2YWlsYWJsZS5cbiAqXG4gKiB7QGxpbmsgaHR0cHM6Ly9jb2RleC53b3JkcHJlc3Mub3JnL1RoZW1lX0N1c3RvbWl6YXRpb25fQVBJfVxuICovXG5cbi8qKlxuICogQ2hhbmdlIHRoZSBibG9nIG5hbWUgdmFsdWUuXG4gKlxuICogQHBhcmFtIHtzdHJpbmd9IHZhbHVlXG4gKi9cbndwLmN1c3RvbWl6ZSgnYmxvZ25hbWUnLCB2YWx1ZSA9PiB7XG4gIHZhbHVlLmJpbmQodG8gPT4gJCgnLmJyYW5kJykudGV4dCh0bykpO1xufSk7XG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/scripts/customizer.js\n");

/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/***/ (function(module) {

"use strict";
module.exports = window["jQuery"];

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ var __webpack_exports__ = (__webpack_exec__("./resources/scripts/customizer.js"));
/******/ }
]);