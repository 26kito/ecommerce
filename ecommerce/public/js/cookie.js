/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/cookie.js":
/*!********************************!*\
  !*** ./resources/js/cookie.js ***!
  \********************************/
/***/ (() => {

eval("var cookie = {\n  getCookie: function getCookie(name) {\n    // Split the document.cookie string into an array of individual cookies\n    var cookies = document.cookie.split('; ');\n\n    // Iterate over the cookies to find the one with the specified name\n    for (var i = 0; i < cookies.length; i++) {\n      var _cookie = cookies[i].split('=');\n      var cookieName = decodeURIComponent(_cookie[0]);\n\n      // If the cookie name matches, return its value\n      if (cookieName === name) {\n        return decodeURIComponent(_cookie[1]);\n      }\n    }\n\n    // If the cookie with the specified name is not found, return null\n    return null;\n  },\n  setCookie: function setCookie(name, value, hoursToExpire) {\n    var expirationDate = new Date();\n    expirationDate.setTime(expirationDate.getTime() + hoursToExpire * 60 * 60 * 1000);\n    var cookieValue = encodeURIComponent(name) + '=' + encodeURIComponent(value) + '; expires=' + expirationDate.toUTCString() + '; path=/';\n    document.cookie = cookieValue;\n  },\n  unsetCookie: function unsetCookie(name) {\n    document.cookie = encodeURIComponent(name) + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';\n  }\n};\nwindow.cookie = cookie;//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJjb29raWUiLCJnZXRDb29raWUiLCJuYW1lIiwiY29va2llcyIsImRvY3VtZW50Iiwic3BsaXQiLCJpIiwibGVuZ3RoIiwiY29va2llTmFtZSIsImRlY29kZVVSSUNvbXBvbmVudCIsInNldENvb2tpZSIsInZhbHVlIiwiaG91cnNUb0V4cGlyZSIsImV4cGlyYXRpb25EYXRlIiwiRGF0ZSIsInNldFRpbWUiLCJnZXRUaW1lIiwiY29va2llVmFsdWUiLCJlbmNvZGVVUklDb21wb25lbnQiLCJ0b1VUQ1N0cmluZyIsInVuc2V0Q29va2llIiwid2luZG93Il0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9jb29raWUuanM/Nzg0YSJdLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBjb29raWUgPSB7XHJcbiAgICBnZXRDb29raWUobmFtZSkge1xyXG4gICAgICAgIC8vIFNwbGl0IHRoZSBkb2N1bWVudC5jb29raWUgc3RyaW5nIGludG8gYW4gYXJyYXkgb2YgaW5kaXZpZHVhbCBjb29raWVzXHJcbiAgICAgICAgbGV0IGNvb2tpZXMgPSBkb2N1bWVudC5jb29raWUuc3BsaXQoJzsgJyk7XHJcblxyXG4gICAgICAgIC8vIEl0ZXJhdGUgb3ZlciB0aGUgY29va2llcyB0byBmaW5kIHRoZSBvbmUgd2l0aCB0aGUgc3BlY2lmaWVkIG5hbWVcclxuICAgICAgICBmb3IgKGxldCBpID0gMDsgaSA8IGNvb2tpZXMubGVuZ3RoOyBpKyspIHtcclxuICAgICAgICAgICAgbGV0IGNvb2tpZSA9IGNvb2tpZXNbaV0uc3BsaXQoJz0nKTtcclxuICAgICAgICAgICAgbGV0IGNvb2tpZU5hbWUgPSBkZWNvZGVVUklDb21wb25lbnQoY29va2llWzBdKTtcclxuXHJcbiAgICAgICAgICAgIC8vIElmIHRoZSBjb29raWUgbmFtZSBtYXRjaGVzLCByZXR1cm4gaXRzIHZhbHVlXHJcbiAgICAgICAgICAgIGlmIChjb29raWVOYW1lID09PSBuYW1lKSB7XHJcbiAgICAgICAgICAgICAgICByZXR1cm4gZGVjb2RlVVJJQ29tcG9uZW50KGNvb2tpZVsxXSk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICBcclxuICAgICAgICAvLyBJZiB0aGUgY29va2llIHdpdGggdGhlIHNwZWNpZmllZCBuYW1lIGlzIG5vdCBmb3VuZCwgcmV0dXJuIG51bGxcclxuICAgICAgICByZXR1cm4gbnVsbDtcclxuICAgIH0sXHJcbiAgICBzZXRDb29raWUobmFtZSwgdmFsdWUsIGhvdXJzVG9FeHBpcmUpIHtcclxuICAgICAgICBsZXQgZXhwaXJhdGlvbkRhdGUgPSBuZXcgRGF0ZSgpO1xyXG4gICAgICAgIGV4cGlyYXRpb25EYXRlLnNldFRpbWUoZXhwaXJhdGlvbkRhdGUuZ2V0VGltZSgpICsgKGhvdXJzVG9FeHBpcmUgKiA2MCAqIDYwICogMTAwMCkpO1xyXG5cclxuICAgICAgICBsZXQgY29va2llVmFsdWUgPSBlbmNvZGVVUklDb21wb25lbnQobmFtZSkgKyAnPScgKyBlbmNvZGVVUklDb21wb25lbnQodmFsdWUpICsgJzsgZXhwaXJlcz0nICsgZXhwaXJhdGlvbkRhdGUudG9VVENTdHJpbmcoKSArICc7IHBhdGg9Lyc7XHJcblxyXG4gICAgICAgIGRvY3VtZW50LmNvb2tpZSA9IGNvb2tpZVZhbHVlO1xyXG4gICAgfSxcclxuICAgIHVuc2V0Q29va2llKG5hbWUpIHtcclxuICAgICAgICBkb2N1bWVudC5jb29raWUgPSBlbmNvZGVVUklDb21wb25lbnQobmFtZSkgKyAnPTsgZXhwaXJlcz1UaHUsIDAxIEphbiAxOTcwIDAwOjAwOjAwIFVUQzsgcGF0aD0vOyc7XHJcbiAgICB9XHJcbn1cclxuXHJcbndpbmRvdy5jb29raWUgPSBjb29raWU7Il0sIm1hcHBpbmdzIjoiQUFBQSxJQUFNQSxNQUFNLEdBQUc7RUFDWEMsU0FBUyxXQUFBQSxVQUFDQyxJQUFJLEVBQUU7SUFDWjtJQUNBLElBQUlDLE9BQU8sR0FBR0MsUUFBUSxDQUFDSixNQUFNLENBQUNLLEtBQUssQ0FBQyxJQUFJLENBQUM7O0lBRXpDO0lBQ0EsS0FBSyxJQUFJQyxDQUFDLEdBQUcsQ0FBQyxFQUFFQSxDQUFDLEdBQUdILE9BQU8sQ0FBQ0ksTUFBTSxFQUFFRCxDQUFDLEVBQUUsRUFBRTtNQUNyQyxJQUFJTixPQUFNLEdBQUdHLE9BQU8sQ0FBQ0csQ0FBQyxDQUFDLENBQUNELEtBQUssQ0FBQyxHQUFHLENBQUM7TUFDbEMsSUFBSUcsVUFBVSxHQUFHQyxrQkFBa0IsQ0FBQ1QsT0FBTSxDQUFDLENBQUMsQ0FBQyxDQUFDOztNQUU5QztNQUNBLElBQUlRLFVBQVUsS0FBS04sSUFBSSxFQUFFO1FBQ3JCLE9BQU9PLGtCQUFrQixDQUFDVCxPQUFNLENBQUMsQ0FBQyxDQUFDLENBQUM7TUFDeEM7SUFDSjs7SUFFQTtJQUNBLE9BQU8sSUFBSTtFQUNmLENBQUM7RUFDRFUsU0FBUyxXQUFBQSxVQUFDUixJQUFJLEVBQUVTLEtBQUssRUFBRUMsYUFBYSxFQUFFO0lBQ2xDLElBQUlDLGNBQWMsR0FBRyxJQUFJQyxJQUFJLEVBQUU7SUFDL0JELGNBQWMsQ0FBQ0UsT0FBTyxDQUFDRixjQUFjLENBQUNHLE9BQU8sRUFBRSxHQUFJSixhQUFhLEdBQUcsRUFBRSxHQUFHLEVBQUUsR0FBRyxJQUFLLENBQUM7SUFFbkYsSUFBSUssV0FBVyxHQUFHQyxrQkFBa0IsQ0FBQ2hCLElBQUksQ0FBQyxHQUFHLEdBQUcsR0FBR2dCLGtCQUFrQixDQUFDUCxLQUFLLENBQUMsR0FBRyxZQUFZLEdBQUdFLGNBQWMsQ0FBQ00sV0FBVyxFQUFFLEdBQUcsVUFBVTtJQUV2SWYsUUFBUSxDQUFDSixNQUFNLEdBQUdpQixXQUFXO0VBQ2pDLENBQUM7RUFDREcsV0FBVyxXQUFBQSxZQUFDbEIsSUFBSSxFQUFFO0lBQ2RFLFFBQVEsQ0FBQ0osTUFBTSxHQUFHa0Isa0JBQWtCLENBQUNoQixJQUFJLENBQUMsR0FBRyxtREFBbUQ7RUFDcEc7QUFDSixDQUFDO0FBRURtQixNQUFNLENBQUNyQixNQUFNLEdBQUdBLE1BQU0iLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY29va2llLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/cookie.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/cookie.js"]();
/******/ 	
/******/ })()
;