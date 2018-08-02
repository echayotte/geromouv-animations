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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 10);
/******/ })
/************************************************************************/
/******/ ({

/***/ 10:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(11);
module.exports = __webpack_require__(12);


/***/ }),

/***/ 11:
/***/ (function(module, exports) {

eval("// console.log(\"page presentation index ok\");\n\nvar btnStages = document.getElementById('btn-stages');\nbtnSeances = document.getElementById('btn-seances'), btnEvents = document.getElementById('btn-events'), hiddenSeances = document.getElementById('presentation-seances'), hiddenStages = document.getElementById('presentation-stages'), hiddenEvents = document.getElementById('presentation-events'), hiddenContact = document.getElementById('presentation-contact');\n\nvar btn = [btnSeances, btnStages, btnEvents];\n\nvar _loop = function _loop(i) {\n\n    btn[i].addEventListener('click', function () {\n\n        if (btn[i] === btnSeances) {\n            hiddenSeances.style.display = \"block\";\n            hiddenStages.style.display = \"none\";\n            hiddenEvents.style.display = \"none\";\n            hiddenContact.style.display = \"block\";\n        } else if (btn[i] === btnStages) {\n            hiddenSeances.style.display = \"none\";\n            hiddenStages.style.display = \"block\";\n            hiddenEvents.style.display = \"none\";\n            hiddenContact.style.display = \"none\";\n        } else if (btn[i] === btnEvents) {\n            hiddenSeances.style.display = \"none\";\n            hiddenStages.style.display = \"none\";\n            hiddenEvents.style.display = \"block\";\n            hiddenContact.style.display = \"none\";\n        } else {\n            hiddenSeances.style.display = \"none\";\n            hiddenStages.style.display = \"none\";\n            hiddenEvents.style.display = \"none\";\n            hiddenContact.style.display = \"block\";\n        }\n    });\n};\n\nfor (var i = 0; i < btn.length; i++) {\n    _loop(i);\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2pzL3ByZXNlbnRhdGlvbi5qcz85YTQ5Il0sIm5hbWVzIjpbImJ0blN0YWdlcyIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJidG5TZWFuY2VzIiwiYnRuRXZlbnRzIiwiaGlkZGVuU2VhbmNlcyIsImhpZGRlblN0YWdlcyIsImhpZGRlbkV2ZW50cyIsImhpZGRlbkNvbnRhY3QiLCJidG4iLCJpIiwiYWRkRXZlbnRMaXN0ZW5lciIsInN0eWxlIiwiZGlzcGxheSIsImxlbmd0aCJdLCJtYXBwaW5ncyI6IkFBQUE7O0FBRUEsSUFBSUEsWUFBWUMsU0FBU0MsY0FBVCxDQUF3QixZQUF4QixDQUFoQjtBQUNJQyxhQUFhRixTQUFTQyxjQUFULENBQXdCLGFBQXhCLENBQWIsRUFDQUUsWUFBWUgsU0FBU0MsY0FBVCxDQUF3QixZQUF4QixDQURaLEVBR0FHLGdCQUFnQkosU0FBU0MsY0FBVCxDQUF3QixzQkFBeEIsQ0FIaEIsRUFJQUksZUFBZUwsU0FBU0MsY0FBVCxDQUF3QixxQkFBeEIsQ0FKZixFQUtBSyxlQUFlTixTQUFTQyxjQUFULENBQXdCLHFCQUF4QixDQUxmLEVBTUFNLGdCQUFnQlAsU0FBU0MsY0FBVCxDQUF3QixzQkFBeEIsQ0FOaEI7O0FBUUosSUFBSU8sTUFBTSxDQUFDTixVQUFELEVBQWFILFNBQWIsRUFBd0JJLFNBQXhCLENBQVY7OzJCQUdTTSxDOztBQUVMRCxRQUFJQyxDQUFKLEVBQU9DLGdCQUFQLENBQXdCLE9BQXhCLEVBQWlDLFlBQVk7O0FBRXpDLFlBQUlGLElBQUlDLENBQUosTUFBV1AsVUFBZixFQUEyQjtBQUN2QkUsMEJBQWNPLEtBQWQsQ0FBb0JDLE9BQXBCLEdBQThCLE9BQTlCO0FBQ0FQLHlCQUFhTSxLQUFiLENBQW1CQyxPQUFuQixHQUE2QixNQUE3QjtBQUNBTix5QkFBYUssS0FBYixDQUFtQkMsT0FBbkIsR0FBNkIsTUFBN0I7QUFDQUwsMEJBQWNJLEtBQWQsQ0FBb0JDLE9BQXBCLEdBQThCLE9BQTlCO0FBQ0gsU0FMRCxNQU1LLElBQUlKLElBQUlDLENBQUosTUFBV1YsU0FBZixFQUEwQjtBQUMzQkssMEJBQWNPLEtBQWQsQ0FBb0JDLE9BQXBCLEdBQThCLE1BQTlCO0FBQ0FQLHlCQUFhTSxLQUFiLENBQW1CQyxPQUFuQixHQUE2QixPQUE3QjtBQUNBTix5QkFBYUssS0FBYixDQUFtQkMsT0FBbkIsR0FBNkIsTUFBN0I7QUFDQUwsMEJBQWNJLEtBQWQsQ0FBb0JDLE9BQXBCLEdBQThCLE1BQTlCO0FBRUgsU0FOSSxNQU9BLElBQUlKLElBQUlDLENBQUosTUFBV04sU0FBZixFQUEwQjtBQUMzQkMsMEJBQWNPLEtBQWQsQ0FBb0JDLE9BQXBCLEdBQThCLE1BQTlCO0FBQ0FQLHlCQUFhTSxLQUFiLENBQW1CQyxPQUFuQixHQUE2QixNQUE3QjtBQUNBTix5QkFBYUssS0FBYixDQUFtQkMsT0FBbkIsR0FBNkIsT0FBN0I7QUFDQUwsMEJBQWNJLEtBQWQsQ0FBb0JDLE9BQXBCLEdBQThCLE1BQTlCO0FBQ0gsU0FMSSxNQU1BO0FBQ0RSLDBCQUFjTyxLQUFkLENBQW9CQyxPQUFwQixHQUE4QixNQUE5QjtBQUNBUCx5QkFBYU0sS0FBYixDQUFtQkMsT0FBbkIsR0FBNkIsTUFBN0I7QUFDQU4seUJBQWFLLEtBQWIsQ0FBbUJDLE9BQW5CLEdBQTZCLE1BQTdCO0FBQ0FMLDBCQUFjSSxLQUFkLENBQW9CQyxPQUFwQixHQUE4QixPQUE5QjtBQUNIO0FBQ0osS0EzQkQ7OztBQUZKLEtBQUssSUFBSUgsSUFBSSxDQUFiLEVBQWdCQSxJQUFJRCxJQUFJSyxNQUF4QixFQUFnQ0osR0FBaEMsRUFBcUM7QUFBQSxVQUE1QkEsQ0FBNEI7QUE4QnBDIiwiZmlsZSI6IjExLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy8gY29uc29sZS5sb2coXCJwYWdlIHByZXNlbnRhdGlvbiBpbmRleCBva1wiKTtcblxudmFyIGJ0blN0YWdlcyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdidG4tc3RhZ2VzJyk7XG4gICAgYnRuU2VhbmNlcyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdidG4tc2VhbmNlcycpLFxuICAgIGJ0bkV2ZW50cyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdidG4tZXZlbnRzJyksXG4gICAgICAgIFxuICAgIGhpZGRlblNlYW5jZXMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncHJlc2VudGF0aW9uLXNlYW5jZXMnKSxcbiAgICBoaWRkZW5TdGFnZXMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncHJlc2VudGF0aW9uLXN0YWdlcycpLFxuICAgIGhpZGRlbkV2ZW50cyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdwcmVzZW50YXRpb24tZXZlbnRzJyksXG4gICAgaGlkZGVuQ29udGFjdCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdwcmVzZW50YXRpb24tY29udGFjdCcpO1xuXG52YXIgYnRuID0gW2J0blNlYW5jZXMsIGJ0blN0YWdlcywgYnRuRXZlbnRzXTtcblxuXG5mb3IgKGxldCBpID0gMDsgaSA8IGJ0bi5sZW5ndGg7IGkrKykge1xuXG4gICAgYnRuW2ldLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xuICAgICAgICBcbiAgICAgICAgaWYgKGJ0bltpXSA9PT0gYnRuU2VhbmNlcykge1xuICAgICAgICAgICAgaGlkZGVuU2VhbmNlcy5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xuICAgICAgICAgICAgaGlkZGVuU3RhZ2VzLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcbiAgICAgICAgICAgIGhpZGRlbkV2ZW50cy5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XG4gICAgICAgICAgICBoaWRkZW5Db250YWN0LnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XG4gICAgICAgIH1cbiAgICAgICAgZWxzZSBpZiAoYnRuW2ldID09PSBidG5TdGFnZXMpIHtcbiAgICAgICAgICAgIGhpZGRlblNlYW5jZXMuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xuICAgICAgICAgICAgaGlkZGVuU3RhZ2VzLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XG4gICAgICAgICAgICBoaWRkZW5FdmVudHMuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xuICAgICAgICAgICAgaGlkZGVuQ29udGFjdC5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XG5cbiAgICAgICAgfVxuICAgICAgICBlbHNlIGlmIChidG5baV0gPT09IGJ0bkV2ZW50cykge1xuICAgICAgICAgICAgaGlkZGVuU2VhbmNlcy5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XG4gICAgICAgICAgICBoaWRkZW5TdGFnZXMuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xuICAgICAgICAgICAgaGlkZGVuRXZlbnRzLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XG4gICAgICAgICAgICBoaWRkZW5Db250YWN0LnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcbiAgICAgICAgfVxuICAgICAgICBlbHNlIHtcbiAgICAgICAgICAgIGhpZGRlblNlYW5jZXMuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xuICAgICAgICAgICAgaGlkZGVuU3RhZ2VzLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcbiAgICAgICAgICAgIGhpZGRlbkV2ZW50cy5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XG4gICAgICAgICAgICBoaWRkZW5Db250YWN0LnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XG4gICAgICAgIH1cbiAgICB9KVxufVxuXG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIC4vcmVzb3VyY2VzL2Fzc2V0cy9qcy9wcmVzZW50YXRpb24uanMiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///11\n");

/***/ }),

/***/ 12:
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL3Nhc3MvYXBwLnNjc3M/NTEwNiJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSIsImZpbGUiOiIxMi5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luXG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vXG4vLyBXRUJQQUNLIEZPT1RFUlxuLy8gLi9yZXNvdXJjZXMvYXNzZXRzL3Nhc3MvYXBwLnNjc3Ncbi8vIG1vZHVsZSBpZCA9IDEyXG4vLyBtb2R1bGUgY2h1bmtzID0gMSJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///12\n");

/***/ })

/******/ });