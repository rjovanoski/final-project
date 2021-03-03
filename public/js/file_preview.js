/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/file_preview.js":
/*!**************************************!*\
  !*** ./resources/js/file_preview.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("function _typeof(obj) { \"@babel/helpers - typeof\"; if (typeof Symbol === \"function\" && typeof Symbol.iterator === \"symbol\") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === \"function\" && obj.constructor === Symbol && obj !== Symbol.prototype ? \"symbol\" : typeof obj; }; } return _typeof(obj); }\n\n/******/\n(function (modules) {\n  // webpackBootstrap\n\n  /******/\n  // The module cache\n\n  /******/\n  var installedModules = {};\n  /******/\n\n  /******/\n  // The require function\n\n  /******/\n\n  function __webpack_require__(moduleId) {\n    /******/\n\n    /******/\n    // Check if module is in cache\n\n    /******/\n    if (installedModules[moduleId]) {\n      /******/\n      return installedModules[moduleId].exports;\n      /******/\n    }\n    /******/\n    // Create a new module (and put it into the cache)\n\n    /******/\n\n\n    var module = installedModules[moduleId] = {\n      /******/\n      i: moduleId,\n\n      /******/\n      l: false,\n\n      /******/\n      exports: {}\n      /******/\n\n    };\n    /******/\n\n    /******/\n    // Execute the module function\n\n    /******/\n\n    modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);\n    /******/\n\n    /******/\n    // Flag the module as loaded\n\n    /******/\n\n    module.l = true;\n    /******/\n\n    /******/\n    // Return the exports of the module\n\n    /******/\n\n    return module.exports;\n    /******/\n  }\n  /******/\n\n  /******/\n\n  /******/\n  // expose the modules object (__webpack_modules__)\n\n  /******/\n\n\n  __webpack_require__.m = modules;\n  /******/\n\n  /******/\n  // expose the module cache\n\n  /******/\n\n  __webpack_require__.c = installedModules;\n  /******/\n\n  /******/\n  // define getter function for harmony exports\n\n  /******/\n\n  __webpack_require__.d = function (exports, name, getter) {\n    /******/\n    if (!__webpack_require__.o(exports, name)) {\n      /******/\n      Object.defineProperty(exports, name, {\n        enumerable: true,\n        get: getter\n      });\n      /******/\n    }\n    /******/\n\n  };\n  /******/\n\n  /******/\n  // define __esModule on exports\n\n  /******/\n\n\n  __webpack_require__.r = function (exports) {\n    /******/\n    if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {\n      /******/\n      Object.defineProperty(exports, Symbol.toStringTag, {\n        value: 'Module'\n      });\n      /******/\n    }\n    /******/\n\n\n    Object.defineProperty(exports, '__esModule', {\n      value: true\n    });\n    /******/\n  };\n  /******/\n\n  /******/\n  // create a fake namespace object\n\n  /******/\n  // mode & 1: value is a module id, require it\n\n  /******/\n  // mode & 2: merge all properties of value into the ns\n\n  /******/\n  // mode & 4: return value when already ns object\n\n  /******/\n  // mode & 8|1: behave like require\n\n  /******/\n\n\n  __webpack_require__.t = function (value, mode) {\n    /******/\n    if (mode & 1) value = __webpack_require__(value);\n    /******/\n\n    if (mode & 8) return value;\n    /******/\n\n    if (mode & 4 && _typeof(value) === 'object' && value && value.__esModule) return value;\n    /******/\n\n    var ns = Object.create(null);\n    /******/\n\n    __webpack_require__.r(ns);\n    /******/\n\n\n    Object.defineProperty(ns, 'default', {\n      enumerable: true,\n      value: value\n    });\n    /******/\n\n    if (mode & 2 && typeof value != 'string') for (var key in value) {\n      __webpack_require__.d(ns, key, function (key) {\n        return value[key];\n      }.bind(null, key));\n    }\n    /******/\n\n    return ns;\n    /******/\n  };\n  /******/\n\n  /******/\n  // getDefaultExport function for compatibility with non-harmony modules\n\n  /******/\n\n\n  __webpack_require__.n = function (module) {\n    /******/\n    var getter = module && module.__esModule ?\n    /******/\n    function getDefault() {\n      return module['default'];\n    } :\n    /******/\n    function getModuleExports() {\n      return module;\n    };\n    /******/\n\n    __webpack_require__.d(getter, 'a', getter);\n    /******/\n\n\n    return getter;\n    /******/\n  };\n  /******/\n\n  /******/\n  // Object.prototype.hasOwnProperty.call\n\n  /******/\n\n\n  __webpack_require__.o = function (object, property) {\n    return Object.prototype.hasOwnProperty.call(object, property);\n  };\n  /******/\n\n  /******/\n  // __webpack_public_path__\n\n  /******/\n\n\n  __webpack_require__.p = \"/\";\n  /******/\n\n  /******/\n\n  /******/\n  // Load entry module and return exports\n\n  /******/\n\n  return __webpack_require__(__webpack_require__.s = 2);\n  /******/\n})(\n/************************************************************************/\n\n/******/\n{\n  /***/\n  \"./resources/js/file_preview.js\":\n  /*!**************************************!*\\\n    !*** ./resources/js/file_preview.js ***!\n    \\**************************************/\n\n  /*! no static exports found */\n\n  /***/\n  function resourcesJsFile_previewJs(module, exports) {\n    var inputFile = document.getElementById(\"image\");\n    var previewContainer = document.getElementById(\"previewContainer\");\n    var previewImage = previewContainer.querySelector(\".imageRecipe-preview\");\n    var previewDefaultText = previewContainer.querySelector(\".default-text\");\n    inputFile.addEventListener(\"change\", function () {\n      var file = this.files[0];\n\n      if (file) {\n        var reader = new FileReader();\n        previewDefaultText.style.display = \"none\";\n        previewImage.style.display = \"block\";\n        reader.addEventListener(\"load\", function () {\n          previewImage.setAttribute(\"src\", this.result);\n        });\n        reader.readAsDataURL(file);\n      } else {\n        previewDefaultText.style.display = null;\n        previewImage.style.display = null;\n        previewImage.setAttribute(\"src\", \"\");\n      }\n    });\n    /***/\n  },\n\n  /***/\n  2:\n  /*!********************************************!*\\\n    !*** multi ./resources/js/file_preview.js ***!\n    \\********************************************/\n\n  /*! no static exports found */\n\n  /***/\n  function _(module, exports, __webpack_require__) {\n    module.exports = __webpack_require__(\n    /*! /mnt/5200A07100A05E2B/MyProjects/ca-final/resources/js/file_preview.js */\n    \"./resources/js/file_preview.js\");\n    /***/\n  }\n  /******/\n\n});\n\n$(document).ready(function (e) {\n  $('#avatar').change(function () {\n    var reader = new FileReader();\n\n    reader.onload = function (e) {\n      $('#previewAvatar').attr('src', e.target.result);\n    };\n\n    reader.readAsDataURL(this.files[0]);\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZmlsZV9wcmV2aWV3LmpzPzUzOGQiXSwibmFtZXMiOlsibW9kdWxlcyIsImluc3RhbGxlZE1vZHVsZXMiLCJfX3dlYnBhY2tfcmVxdWlyZV9fIiwibW9kdWxlSWQiLCJleHBvcnRzIiwibW9kdWxlIiwiaSIsImwiLCJjYWxsIiwibSIsImMiLCJkIiwibmFtZSIsImdldHRlciIsIm8iLCJPYmplY3QiLCJkZWZpbmVQcm9wZXJ0eSIsImVudW1lcmFibGUiLCJnZXQiLCJyIiwiU3ltYm9sIiwidG9TdHJpbmdUYWciLCJ2YWx1ZSIsInQiLCJtb2RlIiwiX19lc01vZHVsZSIsIm5zIiwiY3JlYXRlIiwia2V5IiwiYmluZCIsIm4iLCJnZXREZWZhdWx0IiwiZ2V0TW9kdWxlRXhwb3J0cyIsIm9iamVjdCIsInByb3BlcnR5IiwicHJvdG90eXBlIiwiaGFzT3duUHJvcGVydHkiLCJwIiwicyIsImlucHV0RmlsZSIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJwcmV2aWV3Q29udGFpbmVyIiwicHJldmlld0ltYWdlIiwicXVlcnlTZWxlY3RvciIsInByZXZpZXdEZWZhdWx0VGV4dCIsImFkZEV2ZW50TGlzdGVuZXIiLCJmaWxlIiwiZmlsZXMiLCJyZWFkZXIiLCJGaWxlUmVhZGVyIiwic3R5bGUiLCJkaXNwbGF5Iiwic2V0QXR0cmlidXRlIiwicmVzdWx0IiwicmVhZEFzRGF0YVVSTCIsIiQiLCJyZWFkeSIsImUiLCJjaGFuZ2UiLCJvbmxvYWQiLCJhdHRyIiwidGFyZ2V0Il0sIm1hcHBpbmdzIjoiOztBQUFBO0FBQVMsQ0FBQyxVQUFTQSxPQUFULEVBQWtCO0FBQUU7O0FBQzlCO0FBQVU7O0FBQ1Y7QUFBVSxNQUFJQyxnQkFBZ0IsR0FBRyxFQUF2QjtBQUNWOztBQUNBO0FBQVU7O0FBQ1Y7O0FBQVUsV0FBU0MsbUJBQVQsQ0FBNkJDLFFBQTdCLEVBQXVDO0FBQ2pEOztBQUNBO0FBQVc7O0FBQ1g7QUFBVyxRQUFH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S0FBS0MsTUFBdEM7QUFDRCxTQUZEO0FBR0FMLGNBQU0sQ0FBQ00sYUFBUCxDQUFxQlIsSUFBckI7QUFDRCxPQVJELE1BUU87QUFDTEYsMEJBQWtCLENBQUNNLEtBQW5CLENBQXlCQyxPQUF6QixHQUFtQyxJQUFuQztBQUNBVCxvQkFBWSxDQUFDUSxLQUFiLENBQW1CQyxPQUFuQixHQUE2QixJQUE3QjtBQUNBVCxvQkFBWSxDQUFDVSxZQUFiLENBQTBCLEtBQTFCLEVBQWlDLEVBQWpDO0FBQ0Q7QUFDRixLQWhCRDtBQWtCQTtBQUFPLEdBL0JHOztBQWlDVjtBQUFNO0FBQ047QUFDQTtBQUNBOztBQUNBOztBQUNBO0FBQU8sYUFBU2hELE1BQVQsRUFBaUJELE9BQWpCLEVBQTBCRixtQkFBMUIsRUFBK0M7QUFFdERHLFVBQU0sQ0FBQ0QsT0FBUCxHQUFpQkYsbUJBQW1CO0FBQUM7QUFBNkUsb0NBQTlFLENBQXBDO0FBR0E7QUFBTztBQUVQOztBQTdDVSxDQXRGRDs7QUFxSVRzRCxDQUFDLENBQUNoQixRQUFELENBQUQsQ0FBWWlCLEtBQVosQ0FBa0IsVUFBVUMsQ0FBVixFQUFhO0FBRzdCRixHQUFDLENBQUMsU0FBRCxDQUFELENBQWFHLE1BQWIsQ0FBb0IsWUFBVTtBQUU3QixRQUFJVixNQUFNLEdBQUcsSUFBSUMsVUFBSixFQUFiOztBQUVBRCxVQUFNLENBQUNXLE1BQVAsR0FBZ0IsVUFBQ0YsQ0FBRCxFQUFPO0FBRXJCRixPQUFDLENBQUMsZ0JBQUQsQ0FBRCxDQUFvQkssSUFBcEIsQ0FBeUIsS0FBekIsRUFBZ0NILENBQUMsQ0FBQ0ksTUFBRixDQUFTUixNQUF6QztBQUNELEtBSEQ7O0FBS0FMLFVBQU0sQ0FBQ00sYUFBUCxDQUFxQixLQUFLUCxLQUFMLENBQVcsQ0FBWCxDQUFyQjtBQUVBLEdBWEQ7QUFhRCxDQWhCRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9maWxlX3ByZXZpZXcuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKioqKioqLyAoZnVuY3Rpb24obW9kdWxlcykgeyAvLyB3ZWJwYWNrQm9vdHN0cmFwXG4vKioqKioqLyBcdC8vIFRoZSBtb2R1bGUgY2FjaGVcbi8qKioqKiovIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcbi8qKioqKiovXG4vKioqKioqLyBcdC8vIFRoZSByZXF1aXJlIGZ1bmN0aW9uXG4vKioqKioqLyBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcbi8qKioqKiovXG4vKioqKioqLyBcdFx0Ly8gQ2hlY2sgaWYgbW9kdWxlIGlzIGluIGNhY2hlXG4vKioqKioqLyBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbi8qKioqKiovIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuLyoqKioqKi8gXHRcdH1cbi8qKioqKiovIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuLyoqKioqKi8gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbi8qKioqKiovIFx0XHRcdGk6IG1vZHVsZUlkLFxuLyoqKioqKi8gXHRcdFx0bDogZmFsc2UsXG4vKioqKioqLyBcdFx0XHRleHBvcnRzOiB7fVxuLyoqKioqKi8gXHRcdH07XG4vKioqKioqL1xuLyoqKioqKi8gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuLyoqKioqKi8gXHRcdG1vZHVsZXNbbW9kdWxlSWRdLmNhbGwobW9kdWxlLmV4cG9ydHMsIG1vZHVsZSwgbW9kdWxlLmV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pO1xuLyoqKioqKi9cbi8qKioqKiovIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4vKioqKioqLyBcdFx0bW9kdWxlLmwgPSB0cnVlO1xuLyoqKioqKi9cbi8qKioqKiovIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuLyoqKioqKi8gXHRcdHJldHVybiBtb2R1bGUuZXhwb3J0cztcbi8qKioqKiovIFx0fVxuLyoqKioqKi9cbi8qKioqKiovXG4vKioqKioqLyBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4vKioqKioqLyBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG4vKioqKioqL1xuLyoqKioqKi8gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuLyoqKioqKi8gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuLyoqKioqKi9cbi8qKioqKiovIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4vKioqKioqLyBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuLyoqKioqKi8gXHRcdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZXhwb3J0cywgbmFtZSkpIHtcbi8qKioqKiovIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7IGVudW1lcmFibGU6IHRydWUsIGdldDogZ2V0dGVyIH0pO1xuLyoqKioqKi8gXHRcdH1cbi8qKioqKiovIFx0fTtcbi8qKioqKiovXG4vKioqKioqLyBcdC8vIGRlZmluZSBfX2VzTW9kdWxlIG9uIGV4cG9ydHNcbi8qKioqKiovIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yID0gZnVuY3Rpb24oZXhwb3J0cykge1xuLyoqKioqKi8gXHRcdGlmKHR5cGVvZiBTeW1ib2wgIT09ICd1bmRlZmluZWQnICYmIFN5bWJvbC50b1N0cmluZ1RhZykge1xuLyoqKioqKi8gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIFN5bWJvbC50b1N0cmluZ1RhZywgeyB2YWx1ZTogJ01vZHVsZScgfSk7XG4vKioqKioqLyBcdFx0fVxuLyoqKioqKi8gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCAnX19lc01vZHVsZScsIHsgdmFsdWU6IHRydWUgfSk7XG4vKioqKioqLyBcdH07XG4vKioqKioqL1xuLyoqKioqKi8gXHQvLyBjcmVhdGUgYSBmYWtlIG5hbWVzcGFjZSBvYmplY3Rcbi8qKioqKiovIFx0Ly8gbW9kZSAmIDE6IHZhbHVlIGlzIGEgbW9kdWxlIGlkLCByZXF1aXJlIGl0XG4vKioqKioqLyBcdC8vIG1vZGUgJiAyOiBtZXJnZSBhbGwgcHJvcGVydGllcyBvZiB2YWx1ZSBpbnRvIHRoZSBuc1xuLyoqKioqKi8gXHQvLyBtb2RlICYgNDogcmV0dXJuIHZhbHVlIHdoZW4gYWxyZWFkeSBucyBvYmplY3Rcbi8qKioqKiovIFx0Ly8gbW9kZSAmIDh8MTogYmVoYXZlIGxpa2UgcmVxdWlyZVxuLyoqKioqKi8gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnQgPSBmdW5jdGlvbih2YWx1ZSwgbW9kZSkge1xuLyoqKioqKi8gXHRcdGlmKG1vZGUgJiAxKSB2YWx1ZSA9IF9fd2VicGFja19yZXF1aXJlX18odmFsdWUpO1xuLyoqKioqKi8gXHRcdGlmKG1vZGUgJiA4KSByZXR1cm4gdmFsdWU7XG4vKioqKioqLyBcdFx0aWYoKG1vZGUgJiA0KSAmJiB0eXBlb2YgdmFsdWUgPT09ICdvYmplY3QnICYmIHZhbHVlICYmIHZhbHVlLl9fZXNNb2R1bGUpIHJldHVybiB2YWx1ZTtcbi8qKioqKiovIFx0XHR2YXIgbnMgPSBPYmplY3QuY3JlYXRlKG51bGwpO1xuLyoqKioqKi8gXHRcdF9fd2VicGFja19yZXF1aXJlX18ucihucyk7XG4vKioqKioqLyBcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KG5zLCAnZGVmYXVsdCcsIHsgZW51bWVyYWJsZTogdHJ1ZSwgdmFsdWU6IHZhbHVlIH0pO1xuLyoqKioqKi8gXHRcdGlmKG1vZGUgJiAyICYmIHR5cGVvZiB2YWx1ZSAhPSAnc3RyaW5nJykgZm9yKHZhciBrZXkgaW4gdmFsdWUpIF9fd2VicGFja19yZXF1aXJlX18uZChucywga2V5LCBmdW5jdGlvbihrZXkpIHsgcmV0dXJuIHZhbHVlW2tleV07IH0uYmluZChudWxsLCBrZXkpKTtcbi8qKioqKiovIFx0XHRyZXR1cm4gbnM7XG4vKioqKioqLyBcdH07XG4vKioqKioqL1xuLyoqKioqKi8gXHQvLyBnZXREZWZhdWx0RXhwb3J0IGZ1bmN0aW9uIGZvciBjb21wYXRpYmlsaXR5IHdpdGggbm9uLWhhcm1vbnkgbW9kdWxlc1xuLyoqKioqKi8gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbi8qKioqKiovIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbi8qKioqKiovIFx0XHRcdGZ1bmN0aW9uIGdldERlZmF1bHQoKSB7IHJldHVybiBtb2R1bGVbJ2RlZmF1bHQnXTsgfSA6XG4vKioqKioqLyBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuLyoqKioqKi8gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbi8qKioqKiovIFx0XHRyZXR1cm4gZ2V0dGVyO1xuLyoqKioqKi8gXHR9O1xuLyoqKioqKi9cbi8qKioqKiovIFx0Ly8gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsXG4vKioqKioqLyBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcbi8qKioqKiovXG4vKioqKioqLyBcdC8vIF9fd2VicGFja19wdWJsaWNfcGF0aF9fXG4vKioqKioqLyBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiL1wiO1xuLyoqKioqKi9cbi8qKioqKiovXG4vKioqKioqLyBcdC8vIExvYWQgZW50cnkgbW9kdWxlIGFuZCByZXR1cm4gZXhwb3J0c1xuLyoqKioqKi8gXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSAyKTtcbi8qKioqKiovIH0pXG4vKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqL1xuLyoqKioqKi8gKHtcblxuLyoqKi8gXCIuL3Jlc291cmNlcy9qcy9maWxlX3ByZXZpZXcuanNcIjpcbi8qISoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqISpcXFxuICAhKioqIC4vcmVzb3VyY2VzL2pzL2ZpbGVfcHJldmlldy5qcyAqKiohXG4gIFxcKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKiovXG4vKiEgbm8gc3RhdGljIGV4cG9ydHMgZm91bmQgKi9cbi8qKiovIChmdW5jdGlvbihtb2R1bGUsIGV4cG9ydHMpIHtcblxudmFyIGlucHV0RmlsZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiaW1hZ2VcIik7XG52YXIgcHJldmlld0NvbnRhaW5lciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwicHJldmlld0NvbnRhaW5lclwiKTtcbnZhciBwcmV2aWV3SW1hZ2UgPSBwcmV2aWV3Q29udGFpbmVyLnF1ZXJ5U2VsZWN0b3IoXCIuaW1hZ2VSZWNpcGUtcHJldmlld1wiKTtcbnZhciBwcmV2aWV3RGVmYXVsdFRleHQgPSBwcmV2aWV3Q29udGFpbmVyLnF1ZXJ5U2VsZWN0b3IoXCIuZGVmYXVsdC10ZXh0XCIpO1xuaW5wdXRGaWxlLmFkZEV2ZW50TGlzdGVuZXIoXCJjaGFuZ2VcIiwgZnVuY3Rpb24gKCkge1xuICB2YXIgZmlsZSA9IHRoaXMuZmlsZXNbMF07XG5cbiAgaWYgKGZpbGUpIHtcbiAgICB2YXIgcmVhZGVyID0gbmV3IEZpbGVSZWFkZXIoKTtcbiAgICBwcmV2aWV3RGVmYXVsdFRleHQuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xuICAgIHByZXZpZXdJbWFnZS5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xuICAgIHJlYWRlci5hZGRFdmVudExpc3RlbmVyKFwibG9hZFwiLCBmdW5jdGlvbiAoKSB7XG4gICAgICBwcmV2aWV3SW1hZ2Uuc2V0QXR0cmlidXRlKFwic3JjXCIsIHRoaXMucmVzdWx0KTtcbiAgICB9KTtcbiAgICByZWFkZXIucmVhZEFzRGF0YVVSTChmaWxlKTtcbiAgfSBlbHNlIHtcbiAgICBwcmV2aWV3RGVmYXVsdFRleHQuc3R5bGUuZGlzcGxheSA9IG51bGw7XG4gICAgcHJldmlld0ltYWdlLnN0eWxlLmRpc3BsYXkgPSBudWxsO1xuICAgIHByZXZpZXdJbWFnZS5zZXRBdHRyaWJ1dGUoXCJzcmNcIiwgXCJcIik7XG4gIH1cbn0pO1xuXG4vKioqLyB9KSxcblxuLyoqKi8gMjpcbi8qISoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqISpcXFxuICAhKioqIG11bHRpIC4vcmVzb3VyY2VzL2pzL2ZpbGVfcHJldmlldy5qcyAqKiohXG4gIFxcKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKiovXG4vKiEgbm8gc3RhdGljIGV4cG9ydHMgZm91bmQgKi9cbi8qKiovIChmdW5jdGlvbihtb2R1bGUsIGV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pIHtcblxubW9kdWxlLmV4cG9ydHMgPSBfX3dlYnBhY2tfcmVxdWlyZV9fKC8qISAvbW50LzUyMDBBMDcxMDBBMDVFMkIvTXlQcm9qZWN0cy9jYS1maW5hbC9yZXNvdXJjZXMvanMvZmlsZV9wcmV2aWV3LmpzICovXCIuL3Jlc291cmNlcy9qcy9maWxlX3ByZXZpZXcuanNcIik7XG5cblxuLyoqKi8gfSlcblxuLyoqKioqKi8gfSk7XG5cbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uIChlKSB7XG4gXG4gICBcbiAgJCgnI2F2YXRhcicpLmNoYW5nZShmdW5jdGlvbigpe1xuICAgICAgICAgICBcbiAgIGxldCByZWFkZXIgPSBuZXcgRmlsZVJlYWRlcigpO1xuXG4gICByZWFkZXIub25sb2FkID0gKGUpID0+IHsgXG5cbiAgICAgJCgnI3ByZXZpZXdBdmF0YXInKS5hdHRyKCdzcmMnLCBlLnRhcmdldC5yZXN1bHQpOyBcbiAgIH1cblxuICAgcmVhZGVyLnJlYWRBc0RhdGFVUkwodGhpcy5maWxlc1swXSk7IFxuICBcbiAgfSk7XG4gIFxufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/file_preview.js\n");

/***/ }),

/***/ 4:
/*!********************************************!*\
  !*** multi ./resources/js/file_preview.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/html/final-project/resources/js/file_preview.js */"./resources/js/file_preview.js");


/***/ })

/******/ });