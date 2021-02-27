/*!
 * clipboard.js v1.7.1
 * https://zenorocha.github.io/clipboard.js
 *
 * Licensed MIT 漏 Zeno Rocha
 */
!
function(t) {
	if ("object" == typeof exports && "undefined" != typeof module) module.exports = t();
	else if ("function" == typeof define && define.amd) define([], t);
	else {
		var e;
		e = "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self ? self : this, e.Clipboard = t()
	}
}(function() {
	var t, e, n;
	return function t(e, n, o) {
		function i(a, c) {
			if (!n[a]) {
				if (!e[a]) {
					var l = "function" == typeof require && require;
					if (!c && l) return l(a, !0);
					if (r) return r(a, !0);
					var s = new Error("Cannot find module '" + a + "'");
					throw s.code = "MODULE_NOT_FOUND", s
				}
				var u = n[a] = {
					exports: {}
				};
				e[a][0].call(u.exports, function(t) {
					var n = e[a][1][t];
					return i(n || t)
				}, u, u.exports, t, e, n, o)
			}
			return n[a].exports
		}
		for (var r = "function" == typeof require && require, a = 0; a < o.length; a++) i(o[a]);
		return i
	}({
		1: [function(t, e, n) {
			function o(t, e) {
				for (; t && t.nodeType !== i;) {
					if ("function" == typeof t.matches && t.matches(e)) return t;
					t = t.parentNode
				}
			}
			var i = 9;
			if ("undefined" != typeof Element && !Element.prototype.matches) {
				var r = Element.prototype;
				r.matches = r.matchesSelector || r.mozMatchesSelector || r.msMatchesSelector || r.oMatchesSelector || r.webkitMatchesSelector
			}
			e.exports = o
		}, {}],
		2: [function(t, e, n) {
			function o(t, e, n, o, r) {
				var a = i.apply(this, arguments);
				return t.addEventListener(n, a, r), {
					destroy: function() {
						t.removeEventListener(n, a, r)
					}
				}
			}
			function i(t, e, n, o) {
				return function(n) {
					n.delegateTarget = r(n.target, e), n.delegateTarget && o.call(t, n)
				}
			}
			var r = t("./closest");
			e.exports = o
		}, {
			"./closest": 1
		}],
		3: [function(t, e, n) {
			n.node = function(t) {
				return void 0 !== t && t instanceof HTMLElement && 1 === t.nodeType
			}, n.nodeList = function(t) {
				var e = Object.prototype.toString.call(t);
				return void 0 !== t && ("[object NodeList]" === e || "[object HTMLCollection]" === e) && "length" in t && (0 === t.length || n.node(t[0]))
			}, n.string = function(t) {
				return "string" == typeof t || t instanceof String
			}, n.fn = function(t) {
				return "[object Function]" === Object.prototype.toString.call(t)
			}
		}, {}],
		4: [function(t, e, n) {
			function o(t, e, n) {
				if (!t && !e && !n) throw new Error("Missing required arguments");
				if (!c.string(e)) throw new TypeError("Second argument must be a String");
				if (!c.fn(n)) throw new TypeError("Third argument must be a Function");
				if (c.node(t)) return i(t, e, n);
				if (c.nodeList(t)) return r(t, e, n);
				if (c.string(t)) return a(t, e, n);
				throw new TypeError("First argument must be a String, HTMLElement, HTMLCollection, or NodeList")
			}
			function i(t, e, n) {
				return t.addEventListener(e, n), {
					destroy: function() {
						t.removeEventListener(e, n)
					}
				}
			}
			function r(t, e, n) {
				return Array.prototype.forEach.call(t, function(t) {
					t.addEventListener(e, n)
				}), {
					destroy: function() {
						Array.prototype.forEach.call(t, function(t) {
							t.removeEventListener(e, n)
						})
					}
				}
			}
			function a(t, e, n) {
				return l(document.body, t, e, n)
			}
			var c = t("./is"),
				l = t("delegate");
			e.exports = o
		}, {
			"./is": 3,
			delegate: 2
		}],
		5: [function(t, e, n) {
			function o(t) {
				var e;
				if ("SELECT" === t.nodeName) t.focus(), e = t.value;
				else if ("INPUT" === t.nodeName || "TEXTAREA" === t.nodeName) {
					var n = t.hasAttribute("readonly");
					n || t.setAttribute("readonly", ""), t.select(), t.setSelectionRange(0, t.value.length), n || t.removeAttribute("readonly"), e = t.value
				} else {
					t.hasAttribute("contenteditable") && t.focus();
					var o = window.getSelection(),
						i = document.createRange();
					i.selectNodeContents(t), o.removeAllRanges(), o.addRange(i), e = o.toString()
				}
				return e
			}
			e.exports = o
		}, {}],
		6: [function(t, e, n) {
			function o() {}
			o.prototype = {
				on: function(t, e, n) {
					var o = this.e || (this.e = {});
					return (o[t] || (o[t] = [])).push({
						fn: e,
						ctx: n
					}), this
				},
				once: function(t, e, n) {
					function o() {
						i.off(t, o), e.apply(n, arguments)
					}
					var i = this;
					return o._ = e, this.on(t, o, n)
				},
				emit: function(t) {
					var e = [].slice.call(arguments, 1),
						n = ((this.e || (this.e = {}))[t] || []).slice(),
						o = 0,
						i = n.length;
					for (o; o < i; o++) n[o].fn.apply(n[o].ctx, e);
					return this
				},
				off: function(t, e) {
					var n = this.e || (this.e = {}),
						o = n[t],
						i = [];
					if (o && e) for (var r = 0, a = o.length; r < a; r++) o[r].fn !== e && o[r].fn._ !== e && i.push(o[r]);
					return i.length ? n[t] = i : delete n[t], this
				}
			}, e.exports = o
		}, {}],
		7: [function(e, n, o) {
			!
			function(i, r) {
				if ("function" == typeof t && t.amd) t(["module", "select"], r);
				else if (void 0 !== o) r(n, e("select"));
				else {
					var a = {
						exports: {}
					};
					r(a, i.select), i.clipboardAction = a.exports
				}
			}(this, function(t, e) {
				"use strict";

				function n(t) {
					return t && t.__esModule ? t : {
					default:
						t
					}
				}
				function o(t, e) {
					if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
				}
				var i = n(e),
					r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ?
				function(t) {
					return typeof t
				} : function(t) {
					return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
				}, a = function() {
					function t(t, e) {
						for (var n = 0; n < e.length; n++) {
							var o = e[n];
							o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(t, o.key, o)
						}
					}
					return function(e, n, o) {
						return n && t(e.prototype, n), o && t(e, o), e
					}
				}(), c = function() {
					function t(e) {
						o(this, t), this.resolveOptions(e), this.initSelection()
					}
					return a(t, [{
						key: "resolveOptions",
						value: function t() {
							var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
							this.action = e.action, this.container = e.container, this.emitter = e.emitter, this.target = e.target, this.text = e.text, this.trigger = e.trigger, this.selectedText = ""
						}
					}, {
						key: "initSelection",
						value: function t() {
							this.text ? this.selectFake() : this.target && this.selectTarget()
						}
					}, {
						key: "selectFake",
						value: function t() {
							var e = this,
								n = "rtl" == document.documentElement.getAttribute("dir");
							this.removeFake(), this.fakeHandlerCallback = function() {
								return e.removeFake()
							}, this.fakeHandler = this.container.addEventListener("click", this.fakeHandlerCallback) || !0, this.fakeElem = document.createElement("textarea"), this.fakeElem.style.fontSize = "12pt", this.fakeElem.style.border = "0", this.fakeElem.style.padding = "0", this.fakeElem.style.margin = "0", this.fakeElem.style.position = "absolute", this.fakeElem.style[n ? "right" : "left"] = "-9999px";
							var o = window.pageYOffset || document.documentElement.scrollTop;
							this.fakeElem.style.top = o + "px", this.fakeElem.setAttribute("readonly", ""), this.fakeElem.value = this.text, this.container.appendChild(this.fakeElem), this.selectedText = (0, i.
						default)(this.fakeElem), this.copyText()
						}
					}, {
						key: "removeFake",
						value: function t() {
							this.fakeHandler && (this.container.removeEventListener("click", this.fakeHandlerCallback), this.fakeHandler = null, this.fakeHandlerCallback = null), this.fakeElem && (this.container.removeChild(this.fakeElem), this.fakeElem = null)
						}
					}, {
						key: "selectTarget",
						value: function t() {
							this.selectedText = (0, i.
						default)(this.target), this.copyText()
						}
					}, {
						key: "copyText",
						value: function t() {
							var e = void 0;
							try {
								e = document.execCommand(this.action)
							} catch (t) {
								e = !1
							}
							this.handleResult(e)
						}
					}, {
						key: "handleResult",
						value: function t(e) {
							this.emitter.emit(e ? "success" : "error", {
								action: this.action,
								text: this.selectedText,
								trigger: this.trigger,
								clearSelection: this.clearSelection.bind(this)
							})
						}
					}, {
						key: "clearSelection",
						value: function t() {
							this.trigger && this.trigger.focus(), window.getSelection().removeAllRanges()
						}
					}, {
						key: "destroy",
						value: function t() {
							this.removeFake()
						}
					}, {
						key: "action",
						set: function t() {
							var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "copy";
							if (this._action = e, "copy" !== this._action && "cut" !== this._action) throw new Error('Invalid "action" value, use either "copy" or "cut"')
						},
						get: function t() {
							return this._action
						}
					}, {
						key: "target",
						set: function t(e) {
							if (void 0 !== e) {
								if (!e || "object" !== (void 0 === e ? "undefined" : r(e)) || 1 !== e.nodeType) throw new Error('Invalid "target" value, use a valid Element');
								if ("copy" === this.action && e.hasAttribute("disabled")) throw new Error('Invalid "target" attribute. Please use "readonly" instead of "disabled" attribute');
								if ("cut" === this.action && (e.hasAttribute("readonly") || e.hasAttribute("disabled"))) throw new Error('Invalid "target" attribute. You can\'t cut text from elements with "readonly" or "disabled" attributes');
								this._target = e
							}
						},
						get: function t() {
							return this._target
						}
					}]), t
				}();
				t.exports = c
			})
		}, {
			select: 5
		}],
		8: [function(e, n, o) {
			!
			function(i, r) {
				if ("function" == typeof t && t.amd) t(["module", "./clipboard-action", "tiny-emitter", "good-listener"], r);
				else if (void 0 !== o) r(n, e("./clipboard-action"), e("tiny-emitter"), e("good-listener"));
				else {
					var a = {
						exports: {}
					};
					r(a, i.clipboardAction, i.tinyEmitter, i.goodListener), i.clipboard = a.exports
				}
			}(this, function(t, e, n, o) {
				"use strict";

				function i(t) {
					return t && t.__esModule ? t : {
					default:
						t
					}
				}
				function r(t, e) {
					if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
				}
				function a(t, e) {
					if (!t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
					return !e || "object" != typeof e && "function" != typeof e ? t : e
				}
				function c(t, e) {
					if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function, not " + typeof e);
					t.prototype = Object.create(e && e.prototype, {
						constructor: {
							value: t,
							enumerable: !1,
							writable: !0,
							configurable: !0
						}
					}), e && (Object.setPrototypeOf ? Object.setPrototypeOf(t, e) : t.__proto__ = e)
				}
				function l(t, e) {
					var n = "data-clipboard-" + t;
					if (e.hasAttribute(n)) return e.getAttribute(n)
				}
				var s = i(e),
					u = i(n),
					f = i(o),
					d = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ?
				function(t) {
					return typeof t
				} : function(t) {
					return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
				}, h = function() {
					function t(t, e) {
						for (var n = 0; n < e.length; n++) {
							var o = e[n];
							o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(t, o.key, o)
						}
					}
					return function(e, n, o) {
						return n && t(e.prototype, n), o && t(e, o), e
					}
				}(), p = function(t) {
					function e(t, n) {
						r(this, e);
						var o = a(this, (e.__proto__ || Object.getPrototypeOf(e)).call(this));
						return o.resolveOptions(n), o.listenClick(t), o
					}
					return c(e, t), h(e, [{
						key: "resolveOptions",
						value: function t() {
							var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
							this.action = "function" == typeof e.action ? e.action : this.defaultAction, this.target = "function" == typeof e.target ? e.target : this.defaultTarget, this.text = "function" == typeof e.text ? e.text : this.defaultText, this.container = "object" === d(e.container) ? e.container : document.body
						}
					}, {
						key: "listenClick",
						value: function t(e) {
							var n = this;
							this.listener = (0, f.
						default)(e, "click", function(t) {
								return n.onClick(t)
							})
						}
					}, {
						key: "onClick",
						value: function t(e) {
							var n = e.delegateTarget || e.currentTarget;
							this.clipboardAction && (this.clipboardAction = null), this.clipboardAction = new s.
						default ({
								action: this.action(n),
								target: this.target(n),
								text: this.text(n),
								container: this.container,
								trigger: n,
								emitter: this
							})
						}
					}, {
						key: "defaultAction",
						value: function t(e) {
							return l("action", e)
						}
					}, {
						key: "defaultTarget",
						value: function t(e) {
							var n = l("target", e);
							if (n) return document.querySelector(n)
						}
					}, {
						key: "defaultText",
						value: function t(e) {
							return l("text", e)
						}
					}, {
						key: "destroy",
						value: function t() {
							this.listener.destroy(), this.clipboardAction && (this.clipboardAction.destroy(), this.clipboardAction = null)
						}
					}], [{
						key: "isSupported",
						value: function t() {
							var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : ["copy", "cut"],
								n = "string" == typeof e ? [e] : e,
								o = !! document.queryCommandSupported;
							return n.forEach(function(t) {
								o = o && !! document.queryCommandSupported(t)
							}), o
						}
					}]), e
				}(u.
			default);
				t.exports = p
			})
		}, {
			"./clipboard-action": 7,
			"good-listener": 4,
			"tiny-emitter": 6
		}]
	}, {}, [8])(8)
});
var hadpingfen = 0;

function stars(r) {
	var curstars = parseInt(r.data.score / 2);
	$("#pa").html(r['data'].vod_gold_5 + "人");
	$("#pb").html(r['data'].vod_gold_4 + "人");
	$("#pc").html(r['data'].vod_gold_3 + "人");
	$("#pd").html(r['data'].vod_gold_2 + "人");
	$("#pe").html(r['data'].vod_gold_1 + "人");
	//$("#commnum").html(r['curpingfen'].num);
	var totalnum = parseInt(r['data'].vod_gold_1) + parseInt(r['data'].vod_gold_2) + parseInt(r['data'].vod_gold_3) + parseInt(r['data'].vod_gold_4) + parseInt(r['data'].vod_gold_5);

	if (totalnum > 0) {
		$("#pam").css("width", ((parseInt(r['data'].vod_gold_5) / totalnum) * 100) + "%");
		$("#pbm").css("width", ((parseInt(r['data'].vod_gold_4) / totalnum) * 100) + "%");
		$("#pcm").css("width", ((parseInt(r['data'].vod_gold_3) / totalnum) * 100) + "%");
		$("#pdm").css("width", ((parseInt(r['data'].vod_gold_2) / totalnum) * 100) + "%");
		$("#pem").css("width", ((parseInt(r['data'].vod_gold_1) / totalnum) * 100) + "%")
	};
	if (r['hadpingfen'] != undefined && r['hadpingfen'] != null) {
		hadpingfen = 1
	};
	var PFbai = r.data.score * 10;
	if (PFbai > 0) {
		$("#rating-main").show();
		$("#rating-kong").hide();
		//$("#fenshu").css('width', parseInt(PFbai) + "%");
		//$("#total").css('width', parseInt(PFbai) + "%");
		$("#fenshu").animate({
			'width': parseInt(PFbai) + "%"
		});
		$("#total").animate({
			'width': parseInt(PFbai) + "%"
		});
		$("#pingfen").html(r.data.score);
		$("#pingfen2").html(r.data.score)
	} else {
		$("#rating-main").hide();
		$("#rating-kong").show();
		$(".loading").addClass('nopingfen').html('暂时没有人评分，赶快从左边打分吧！');
	};



	//$("#golder").html(r['curpingfen'].golder);
	if (curstars > 0) {
		var curnum = curstars - 1;
		$("ul.rating li:lt(" + curnum + ")").addClass("current");
		$("ul.rating li:eq(" + curnum + ")").addClass("current");
		$("ul.rating li:gt(" + curnum + ")").removeClass("current");
		var arr = new Array('很差', '较差', '还行', '推荐', '力荐');
		$("#ratewords").html(arr[curnum])
	}
};

function gold_init() {

	$("ul.rating li").each(function(i) {
		var $title = $(this).attr("title");
		var $lis = $("ul.rating li");
		var num = $(this).index();
		var n = num + 1;
		$(this).click(function() {
			if (hadpingfen > 0) {
				$.showfloatdiv({
					txt: '已经评分,请务重复评分'
				});
				$.hidediv({});
			} else {
				$.showfloatdiv({
					txt: '数据提交中...',
					cssname: 'loading'
				});
				$lis.removeClass("active");
				$("ul.rating li:lt(" + n + ")").addClass("active");
				$("#ratewords").html($title);
				$.getJSON(feifeicms.path + '/index.php/ajax/score?mid=' + $('#rating').attr('data-mid') + '&id=' + $('#rating').attr('data-id') + '&score=' + ($(this).attr('val') * 2), function(r) {
					if (parseInt(r.code) == 1) {
						stars(r);
						$.showfloatdiv({
							txt: r.msg
						});
						$.hidediv({});
						hadpingfen = 1;
					} else {
						hadpingfen = 1;
						$.showfloatdiv({
							txt: r.msg
						});
						$.hidediv({});
					}
				});
			}
		}).hover(function() {
			this.myTitle = this.title;
			this.title = "";
			$(this).nextAll().removeClass("active");
			$(this).prevAll().addClass("active");
			$(this).addClass("active");
			$("#ratewords").html($title);
		}, function() {
			this.title = this.myTitle;
			$("ul.rating li:lt(" + n + ")").removeClass("hover");
		});
	});
	$(".rating-panle").hover(function() {
		$(this).find(".rating-show").show();
	}, function() {
		$(this).find(".rating-show").hide();
	});
}
gold_init();
(function(window, document, Math) {
	var rAF = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
	function(callback) {
		window.setTimeout(callback, 1000 / 60);
	};

	var utils = (function() {
		var me = {};

		var _elementStyle = document.createElement('div').style;
		var _vendor = (function() {
			var vendors = ['t', 'webkitT', 'MozT', 'msT', 'OT'],
				transform, i = 0,
				l = vendors.length;

			for (; i < l; i++) {
				transform = vendors[i] + 'ransform';
				if (transform in _elementStyle) return vendors[i].substr(0, vendors[i].length - 1);
			}

			return false;
		})();

		function _prefixStyle(style) {
			if (_vendor === false) return false;
			if (_vendor === '') return style;
			return _vendor + style.charAt(0).toUpperCase() + style.substr(1);
		}

		me.getTime = Date.now ||
		function getTime() {
			return new Date().getTime();
		};

		me.extend = function(target, obj) {
			for (var i in obj) {
				target[i] = obj[i];
			}
		};

		me.addEvent = function(el, type, fn, capture) {
			el.addEventListener(type, fn, !! capture);
		};

		me.removeEvent = function(el, type, fn, capture) {
			el.removeEventListener(type, fn, !! capture);
		};

		me.prefixPointerEvent = function(pointerEvent) {
			return window.MSPointerEvent ? 'MSPointer' + pointerEvent.charAt(7).toUpperCase() + pointerEvent.substr(8) : pointerEvent;
		};

		me.momentum = function(current, start, time, lowerMargin, wrapperSize, deceleration) {
			var distance = current - start,
				speed = Math.abs(distance) / time,
				destination, duration;

			deceleration = deceleration === undefined ? 0.0006 : deceleration;

			destination = current + (speed * speed) / (2 * deceleration) * (distance < 0 ? -1 : 1);
			duration = speed / deceleration;

			if (destination < lowerMargin) {
				destination = wrapperSize ? lowerMargin - (wrapperSize / 2.5 * (speed / 8)) : lowerMargin;
				distance = Math.abs(destination - current);
				duration = distance / speed;
			} else if (destination > 0) {
				destination = wrapperSize ? wrapperSize / 2.5 * (speed / 8) : 0;
				distance = Math.abs(current) + destination;
				duration = distance / speed;
			}

			return {
				destination: Math.round(destination),
				duration: duration
			};
		};

		var _transform = _prefixStyle('transform');

		me.extend(me, {
			hasTransform: _transform !== false,
			hasPerspective: _prefixStyle('perspective') in _elementStyle,
			hasTouch: 'ontouchstart' in window,
			hasPointer: !! (window.PointerEvent || window.MSPointerEvent),
			// IE10 is prefixed
			hasTransition: _prefixStyle('transition') in _elementStyle
		});

/*
	This should find all Android browsers lower than build 535.19 (both stock browser and webview)
	- galaxy S2 is ok
    - 2.3.6 : `AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1`
    - 4.0.4 : `AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30`
   - galaxy S3 is badAndroid (stock brower, webview)
     `AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30`
   - galaxy S4 is badAndroid (stock brower, webview)
     `AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30`
   - galaxy S5 is OK
     `AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Mobile Safari/537.36 (Chrome/)`
   - galaxy S6 is OK
     `AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Mobile Safari/537.36 (Chrome/)`
  */
		me.isBadAndroid = (function() {
			var appVersion = window.navigator.appVersion;
			// Android browser is not a chrome browser.
			if (/Android/.test(appVersion) && !(/Chrome\/\d/.test(appVersion))) {
				var safariVersion = appVersion.match(/Safari\/(\d+.\d)/);
				if (safariVersion && typeof safariVersion === "object" && safariVersion.length >= 2) {
					return parseFloat(safariVersion[1]) < 535.19;
				} else {
					return true;
				}
			} else {
				return false;
			}
		})();

		me.extend(me.style = {}, {
			transform: _transform,
			transitionTimingFunction: _prefixStyle('transitionTimingFunction'),
			transitionDuration: _prefixStyle('transitionDuration'),
			transitionDelay: _prefixStyle('transitionDelay'),
			transformOrigin: _prefixStyle('transformOrigin')
		});

		me.hasClass = function(e, c) {
			var re = new RegExp("(^|\\s)" + c + "(\\s|$)");
			return re.test(e.className);
		};

		me.addClass = function(e, c) {
			if (me.hasClass(e, c)) {
				return;
			}

			var newclass = e.className.split(' ');
			newclass.push(c);
			e.className = newclass.join(' ');
		};

		me.removeClass = function(e, c) {
			if (!me.hasClass(e, c)) {
				return;
			}

			var re = new RegExp("(^|\\s)" + c + "(\\s|$)", 'g');
			e.className = e.className.replace(re, ' ');
		};

		me.offset = function(el) {
			var left = -el.offsetLeft,
				top = -el.offsetTop;

			// jshint -W084
			while (el = el.offsetParent) {
				left -= el.offsetLeft;
				top -= el.offsetTop;
			}
			// jshint +W084

			return {
				left: left,
				top: top
			};
		};

		me.preventDefaultException = function(el, exceptions) {
			for (var i in exceptions) {
				if (exceptions[i].test(el[i])) {
					return true;
				}
			}

			return false;
		};

		me.extend(me.eventType = {}, {
			touchstart: 1,
			touchmove: 1,
			touchend: 1,

			mousedown: 2,
			mousemove: 2,
			mouseup: 2,

			pointerdown: 3,
			pointermove: 3,
			pointerup: 3,

			MSPointerDown: 3,
			MSPointerMove: 3,
			MSPointerUp: 3
		});

		me.extend(me.ease = {}, {
			quadratic: {
				style: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)',
				fn: function(k) {
					return k * (2 - k);
				}
			},
			circular: {
				style: 'cubic-bezier(0.1, 0.57, 0.1, 1)',
				// Not properly "circular" but this looks better, it should be (0.075, 0.82, 0.165, 1)
				fn: function(k) {
					return Math.sqrt(1 - (--k * k));
				}
			},
			back: {
				style: 'cubic-bezier(0.175, 0.885, 0.32, 1.275)',
				fn: function(k) {
					var b = 4;
					return (k = k - 1) * k * ((b + 1) * k + b) + 1;
				}
			},
			bounce: {
				style: '',
				fn: function(k) {
					if ((k /= 1) < (1 / 2.75)) {
						return 7.5625 * k * k;
					} else if (k < (2 / 2.75)) {
						return 7.5625 * (k -= (1.5 / 2.75)) * k + 0.75;
					} else if (k < (2.5 / 2.75)) {
						return 7.5625 * (k -= (2.25 / 2.75)) * k + 0.9375;
					} else {
						return 7.5625 * (k -= (2.625 / 2.75)) * k + 0.984375;
					}
				}
			},
			elastic: {
				style: '',
				fn: function(k) {
					var f = 0.22,
						e = 0.4;

					if (k === 0) {
						return 0;
					}
					if (k == 1) {
						return 1;
					}

					return (e * Math.pow(2, -10 * k) * Math.sin((k - f / 4) * (2 * Math.PI) / f) + 1);
				}
			}
		});

		me.tap = function(e, eventName) {
			var ev = document.createEvent('Event');
			ev.initEvent(eventName, true, true);
			ev.pageX = e.pageX;
			ev.pageY = e.pageY;
			e.target.dispatchEvent(ev);
		};

		me.click = function(e) {
			var target = e.target,
				ev;

			if (!(/(SELECT|INPUT|TEXTAREA)/i).test(target.tagName)) {
				// https://developer.mozilla.org/en-US/docs/Web/API/MouseEvent/initMouseEvent
				// initMouseEvent is deprecated.
				ev = document.createEvent(window.MouseEvent ? 'MouseEvents' : 'Event');
				ev.initEvent('click', true, true);
				ev.view = e.view || window;
				ev.detail = 1;
				ev.screenX = target.screenX || 0;
				ev.screenY = target.screenY || 0;
				ev.clientX = target.clientX || 0;
				ev.clientY = target.clientY || 0;
				ev.ctrlKey = !! e.ctrlKey;
				ev.altKey = !! e.altKey;
				ev.shiftKey = !! e.shiftKey;
				ev.metaKey = !! e.metaKey;
				ev.button = 0;
				ev.relatedTarget = null;
				ev._constructed = true;
				target.dispatchEvent(ev);
			}
		};

		return me;
	})();

	function IScroll(el, options) {
		this.wrapper = typeof el == 'string' ? document.querySelector(el) : el;
		this.scroller = this.wrapper.children[0];
		this.scrollerStyle = this.scroller.style; // cache style for better performance

		this.options = {

			resizeScrollbars: true,

			mouseWheelSpeed: 20,

			snapThreshold: 0.334,

			// INSERT POINT: OPTIONS
			disablePointer: !utils.hasPointer,
			disableTouch: utils.hasPointer || !utils.hasTouch,
			disableMouse: utils.hasPointer || utils.hasTouch,
			startX: 0,
			startY: 0,
			scrollY: true,
			directionLockThreshold: 5,
			momentum: true,

			bounce: true,
			bounceTime: 600,
			bounceEasing: '',

			preventDefault: true,
			preventDefaultException: {
				tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT)$/
			},

			HWCompositing: true,
			useTransition: true,
			useTransform: true,
			bindToWrapper: typeof window.onmousedown === "undefined"
		};

		for (var i in options) {
			this.options[i] = options[i];
		}

		// Normalize options
		this.translateZ = this.options.HWCompositing && utils.hasPerspective ? ' translateZ(0)' : '';

		this.options.useTransition = utils.hasTransition && this.options.useTransition;
		this.options.useTransform = utils.hasTransform && this.options.useTransform;

		this.options.eventPassthrough = this.options.eventPassthrough === true ? 'vertical' : this.options.eventPassthrough;
		this.options.preventDefault = !this.options.eventPassthrough && this.options.preventDefault;

		// If you want eventPassthrough I have to lock one of the axes
		this.options.scrollY = this.options.eventPassthrough == 'vertical' ? false : this.options.scrollY;
		this.options.scrollX = this.options.eventPassthrough == 'horizontal' ? false : this.options.scrollX;

		// With eventPassthrough we also need lockDirection mechanism
		this.options.freeScroll = this.options.freeScroll && !this.options.eventPassthrough;
		this.options.directionLockThreshold = this.options.eventPassthrough ? 0 : this.options.directionLockThreshold;

		this.options.bounceEasing = typeof this.options.bounceEasing == 'string' ? utils.ease[this.options.bounceEasing] || utils.ease.circular : this.options.bounceEasing;

		this.options.resizePolling = this.options.resizePolling === undefined ? 60 : this.options.resizePolling;

		if (this.options.tap === true) {
			this.options.tap = 'tap';
		}

		// https://github.com/cubiq/iscroll/issues/1029
		if (!this.options.useTransition && !this.options.useTransform) {
			if (!(/relative|absolute/i).test(this.scrollerStyle.position)) {
				this.scrollerStyle.position = "relative";
			}
		}

		if (this.options.shrinkScrollbars == 'scale') {
			this.options.useTransition = false;
		}

		this.options.invertWheelDirection = this.options.invertWheelDirection ? -1 : 1;

		// INSERT POINT: NORMALIZATION

		// Some defaults
		this.x = 0;
		this.y = 0;
		this.directionX = 0;
		this.directionY = 0;
		this._events = {};

		// INSERT POINT: DEFAULTS

		this._init();
		this.refresh();

		this.scrollTo(this.options.startX, this.options.startY);
		this.enable();
	}

	IScroll.prototype = {
		version: '5.2.0',

		_init: function() {
			this._initEvents();

			if (this.options.scrollbars || this.options.indicators) {
				this._initIndicators();
			}

			if (this.options.mouseWheel) {
				this._initWheel();
			}

			if (this.options.snap) {
				this._initSnap();
			}

			if (this.options.keyBindings) {
				this._initKeys();
			}

			// INSERT POINT: _init

		},

		destroy: function() {
			this._initEvents(true);
			clearTimeout(this.resizeTimeout);
			this.resizeTimeout = null;
			this._execEvent('destroy');
		},

		_transitionEnd: function(e) {
			if (e.target != this.scroller || !this.isInTransition) {
				return;
			}

			this._transitionTime();
			if (!this.resetPosition(this.options.bounceTime)) {
				this.isInTransition = false;
				this._execEvent('scrollEnd');
			}
		},

		_start: function(e) {
			// React to left mouse button only
			if (utils.eventType[e.type] != 1) {
				// for button property
				// http://unixpapa.com/js/mouse.html
				var button;
				if (!e.which) { /* IE case */
					button = (e.button < 2) ? 0 : ((e.button == 4) ? 1 : 2);
				} else { /* All others */
					button = e.button;
				}
				if (button !== 0) {
					return;
				}
			}

			if (!this.enabled || (this.initiated && utils.eventType[e.type] !== this.initiated)) {
				return;
			}

			if (this.options.preventDefault && !utils.isBadAndroid && !utils.preventDefaultException(e.target, this.options.preventDefaultException)) {
				e.preventDefault();
			}

			var point = e.touches ? e.touches[0] : e,
				pos;

			this.initiated = utils.eventType[e.type];
			this.moved = false;
			this.distX = 0;
			this.distY = 0;
			this.directionX = 0;
			this.directionY = 0;
			this.directionLocked = 0;

			this.startTime = utils.getTime();

			if (this.options.useTransition && this.isInTransition) {
				this._transitionTime();
				this.isInTransition = false;
				pos = this.getComputedPosition();
				this._translate(Math.round(pos.x), Math.round(pos.y));
				this._execEvent('scrollEnd');
			} else if (!this.options.useTransition && this.isAnimating) {
				this.isAnimating = false;
				this._execEvent('scrollEnd');
			}

			this.startX = this.x;
			this.startY = this.y;
			this.absStartX = this.x;
			this.absStartY = this.y;
			this.pointX = point.pageX;
			this.pointY = point.pageY;

			this._execEvent('beforeScrollStart');
		},

		_move: function(e) {
			if (!this.enabled || utils.eventType[e.type] !== this.initiated) {
				return;
			}

			if (this.options.preventDefault) { // increases performance on Android? TODO: check!
				e.preventDefault();
			}

			var point = e.touches ? e.touches[0] : e,
				deltaX = point.pageX - this.pointX,
				deltaY = point.pageY - this.pointY,
				timestamp = utils.getTime(),
				newX, newY, absDistX, absDistY;

			this.pointX = point.pageX;
			this.pointY = point.pageY;

			this.distX += deltaX;
			this.distY += deltaY;
			absDistX = Math.abs(this.distX);
			absDistY = Math.abs(this.distY);

			// We need to move at least 10 pixels for the scrolling to initiate
			if (timestamp - this.endTime > 300 && (absDistX < 10 && absDistY < 10)) {
				return;
			}

			// If you are scrolling in one direction lock the other
			if (!this.directionLocked && !this.options.freeScroll) {
				if (absDistX > absDistY + this.options.directionLockThreshold) {
					this.directionLocked = 'h'; // lock horizontally
				} else if (absDistY >= absDistX + this.options.directionLockThreshold) {
					this.directionLocked = 'v'; // lock vertically
				} else {
					this.directionLocked = 'n'; // no lock
				}
			}

			if (this.directionLocked == 'h') {
				if (this.options.eventPassthrough == 'vertical') {
					e.preventDefault();
				} else if (this.options.eventPassthrough == 'horizontal') {
					this.initiated = false;
					return;
				}

				deltaY = 0;
			} else if (this.directionLocked == 'v') {
				if (this.options.eventPassthrough == 'horizontal') {
					e.preventDefault();
				} else if (this.options.eventPassthrough == 'vertical') {
					this.initiated = false;
					return;
				}

				deltaX = 0;
			}

			deltaX = this.hasHorizontalScroll ? deltaX : 0;
			deltaY = this.hasVerticalScroll ? deltaY : 0;

			newX = this.x + deltaX;
			newY = this.y + deltaY;

			// Slow down if outside of the boundaries
			if (newX > 0 || newX < this.maxScrollX) {
				newX = this.options.bounce ? this.x + deltaX / 3 : newX > 0 ? 0 : this.maxScrollX;
			}
			if (newY > 0 || newY < this.maxScrollY) {
				newY = this.options.bounce ? this.y + deltaY / 3 : newY > 0 ? 0 : this.maxScrollY;
			}

			this.directionX = deltaX > 0 ? -1 : deltaX < 0 ? 1 : 0;
			this.directionY = deltaY > 0 ? -1 : deltaY < 0 ? 1 : 0;

			if (!this.moved) {
				this._execEvent('scrollStart');
			}

			this.moved = true;

			this._translate(newX, newY);

			/* REPLACE START: _move */

			if (timestamp - this.startTime > 300) {
				this.startTime = timestamp;
				this.startX = this.x;
				this.startY = this.y;
			}

			/* REPLACE END: _move */

		},

		_end: function(e) {
			if (!this.enabled || utils.eventType[e.type] !== this.initiated) {
				return;
			}

			if (this.options.preventDefault && !utils.preventDefaultException(e.target, this.options.preventDefaultException)) {
				e.preventDefault();
			}

			var point = e.changedTouches ? e.changedTouches[0] : e,
				momentumX, momentumY, duration = utils.getTime() - this.startTime,
				newX = Math.round(this.x),
				newY = Math.round(this.y),
				distanceX = Math.abs(newX - this.startX),
				distanceY = Math.abs(newY - this.startY),
				time = 0,
				easing = '';

			this.isInTransition = 0;
			this.initiated = 0;
			this.endTime = utils.getTime();

			// reset if we are outside of the boundaries
			if (this.resetPosition(this.options.bounceTime)) {
				return;
			}

			this.scrollTo(newX, newY); // ensures that the last position is rounded

			// we scrolled less than 10 pixels
			if (!this.moved) {
				if (this.options.tap) {
					utils.tap(e, this.options.tap);
				}

				if (this.options.click) {
					utils.click(e);
				}

				this._execEvent('scrollCancel');
				return;
			}

			if (this._events.flick && duration < 200 && distanceX < 100 && distanceY < 100) {
				this._execEvent('flick');
				return;
			}

			// start momentum animation if needed
			if (this.options.momentum && duration < 300) {
				momentumX = this.hasHorizontalScroll ? utils.momentum(this.x, this.startX, duration, this.maxScrollX, this.options.bounce ? this.wrapperWidth : 0, this.options.deceleration) : {
					destination: newX,
					duration: 0
				};
				momentumY = this.hasVerticalScroll ? utils.momentum(this.y, this.startY, duration, this.maxScrollY, this.options.bounce ? this.wrapperHeight : 0, this.options.deceleration) : {
					destination: newY,
					duration: 0
				};
				newX = momentumX.destination;
				newY = momentumY.destination;
				time = Math.max(momentumX.duration, momentumY.duration);
				this.isInTransition = 1;
			}


			if (this.options.snap) {
				var snap = this._nearestSnap(newX, newY);
				this.currentPage = snap;
				time = this.options.snapSpeed || Math.max(
				Math.max(
				Math.min(Math.abs(newX - snap.x), 1000), Math.min(Math.abs(newY - snap.y), 1000)), 300);
				newX = snap.x;
				newY = snap.y;

				this.directionX = 0;
				this.directionY = 0;
				easing = this.options.bounceEasing;
			}

			// INSERT POINT: _end

			if (newX != this.x || newY != this.y) {
				// change easing function when scroller goes out of the boundaries
				if (newX > 0 || newX < this.maxScrollX || newY > 0 || newY < this.maxScrollY) {
					easing = utils.ease.quadratic;
				}

				this.scrollTo(newX, newY, time, easing);
				return;
			}

			this._execEvent('scrollEnd');
		},

		_resize: function() {
			var that = this;

			clearTimeout(this.resizeTimeout);

			this.resizeTimeout = setTimeout(function() {
				that.refresh();
			}, this.options.resizePolling);
		},

		resetPosition: function(time) {
			var x = this.x,
				y = this.y;

			time = time || 0;

			if (!this.hasHorizontalScroll || this.x > 0) {
				x = 0;
			} else if (this.x < this.maxScrollX) {
				x = this.maxScrollX;
			}

			if (!this.hasVerticalScroll || this.y > 0) {
				y = 0;
			} else if (this.y < this.maxScrollY) {
				y = this.maxScrollY;
			}

			if (x == this.x && y == this.y) {
				return false;
			}

			this.scrollTo(x, y, time, this.options.bounceEasing);

			return true;
		},

		disable: function() {
			this.enabled = false;
		},

		enable: function() {
			this.enabled = true;
		},

		refresh: function() {
			var rf = this.wrapper.offsetHeight; // Force reflow

			this.wrapperWidth = this.wrapper.clientWidth;
			this.wrapperHeight = this.wrapper.clientHeight;

			/* REPLACE START: refresh */

			this.scrollerWidth = this.scroller.offsetWidth;
			this.scrollerHeight = this.scroller.offsetHeight;

			this.maxScrollX = this.wrapperWidth - this.scrollerWidth;
			this.maxScrollY = this.wrapperHeight - this.scrollerHeight;

			/* REPLACE END: refresh */

			this.hasHorizontalScroll = this.options.scrollX && this.maxScrollX < 0;
			this.hasVerticalScroll = this.options.scrollY && this.maxScrollY < 0;

			if (!this.hasHorizontalScroll) {
				this.maxScrollX = 0;
				this.scrollerWidth = this.wrapperWidth;
			}

			if (!this.hasVerticalScroll) {
				this.maxScrollY = 0;
				this.scrollerHeight = this.wrapperHeight;
			}

			this.endTime = 0;
			this.directionX = 0;
			this.directionY = 0;

			this.wrapperOffset = utils.offset(this.wrapper);

			this._execEvent('refresh');

			this.resetPosition();

			// INSERT POINT: _refresh

		},

		on: function(type, fn) {
			if (!this._events[type]) {
				this._events[type] = [];
			}

			this._events[type].push(fn);
		},

		off: function(type, fn) {
			if (!this._events[type]) {
				return;
			}

			var index = this._events[type].indexOf(fn);

			if (index > -1) {
				this._events[type].splice(index, 1);
			}
		},

		_execEvent: function(type) {
			if (!this._events[type]) {
				return;
			}

			var i = 0,
				l = this._events[type].length;

			if (!l) {
				return;
			}

			for (; i < l; i++) {
				this._events[type][i].apply(this, [].slice.call(arguments, 1));
			}
		},

		scrollBy: function(x, y, time, easing) {
			x = this.x + x;
			y = this.y + y;
			time = time || 0;

			this.scrollTo(x, y, time, easing);
		},

		scrollTo: function(x, y, time, easing) {
			easing = easing || utils.ease.circular;

			this.isInTransition = this.options.useTransition && time > 0;
			var transitionType = this.options.useTransition && easing.style;
			if (!time || transitionType) {
				if (transitionType) {
					this._transitionTimingFunction(easing.style);
					this._transitionTime(time);
				}
				this._translate(x, y);
			} else {
				this._animate(x, y, time, easing.fn);
			}
		},

		scrollToElement: function(el, time, offsetX, offsetY, easing) {
			el = el.nodeType ? el : this.scroller.querySelector(el);

			if (!el) {
				return;
			}

			var pos = utils.offset(el);

			pos.left -= this.wrapperOffset.left;
			pos.top -= this.wrapperOffset.top;

			// if offsetX/Y are true we center the element to the screen
			if (offsetX === true) {
				offsetX = Math.round(el.offsetWidth / 2 - this.wrapper.offsetWidth / 2);
			}
			if (offsetY === true) {
				offsetY = Math.round(el.offsetHeight / 2 - this.wrapper.offsetHeight / 2);
			}

			pos.left -= offsetX || 0;
			pos.top -= offsetY || 0;

			pos.left = pos.left > 0 ? 0 : pos.left < this.maxScrollX ? this.maxScrollX : pos.left;
			pos.top = pos.top > 0 ? 0 : pos.top < this.maxScrollY ? this.maxScrollY : pos.top;

			time = time === undefined || time === null || time === 'auto' ? Math.max(Math.abs(this.x - pos.left), Math.abs(this.y - pos.top)) : time;

			this.scrollTo(pos.left, pos.top, time, easing);
		},

		_transitionTime: function(time) {
			if (!this.options.useTransition) {
				return;
			}
			time = time || 0;
			var durationProp = utils.style.transitionDuration;
			if (!durationProp) {
				return;
			}

			this.scrollerStyle[durationProp] = time + 'ms';

			if (!time && utils.isBadAndroid) {
				this.scrollerStyle[durationProp] = '0.0001ms';
				// remove 0.0001ms
				var self = this;
				rAF(function() {
					if (self.scrollerStyle[durationProp] === '0.0001ms') {
						self.scrollerStyle[durationProp] = '0s';
					}
				});
			}


			if (this.indicators) {
				for (var i = this.indicators.length; i--;) {
					this.indicators[i].transitionTime(time);
				}
			}


			// INSERT POINT: _transitionTime

		},

		_transitionTimingFunction: function(easing) {
			this.scrollerStyle[utils.style.transitionTimingFunction] = easing;


			if (this.indicators) {
				for (var i = this.indicators.length; i--;) {
					this.indicators[i].transitionTimingFunction(easing);
				}
			}


			// INSERT POINT: _transitionTimingFunction

		},

		_translate: function(x, y) {
			if (this.options.useTransform) {

				/* REPLACE START: _translate */

				this.scrollerStyle[utils.style.transform] = 'translate(' + x + 'px,' + y + 'px)' + this.translateZ;

				/* REPLACE END: _translate */

			} else {
				x = Math.round(x);
				y = Math.round(y);
				this.scrollerStyle.left = x + 'px';
				this.scrollerStyle.top = y + 'px';
			}

			this.x = x;
			this.y = y;


			if (this.indicators) {
				for (var i = this.indicators.length; i--;) {
					this.indicators[i].updatePosition();
				}
			}


			// INSERT POINT: _translate

		},

		_initEvents: function(remove) {
			var eventType = remove ? utils.removeEvent : utils.addEvent,
				target = this.options.bindToWrapper ? this.wrapper : window;

			eventType(window, 'orientationchange', this);
			eventType(window, 'resize', this);

			if (this.options.click) {
				eventType(this.wrapper, 'click', this, true);
			}

			if (!this.options.disableMouse) {
				eventType(this.wrapper, 'mousedown', this);
				eventType(target, 'mousemove', this);
				eventType(target, 'mousecancel', this);
				eventType(target, 'mouseup', this);
			}

			if (utils.hasPointer && !this.options.disablePointer) {
				eventType(this.wrapper, utils.prefixPointerEvent('pointerdown'), this);
				eventType(target, utils.prefixPointerEvent('pointermove'), this);
				eventType(target, utils.prefixPointerEvent('pointercancel'), this);
				eventType(target, utils.prefixPointerEvent('pointerup'), this);
			}

			if (utils.hasTouch && !this.options.disableTouch) {
				eventType(this.wrapper, 'touchstart', this);
				eventType(target, 'touchmove', this);
				eventType(target, 'touchcancel', this);
				eventType(target, 'touchend', this);
			}

			eventType(this.scroller, 'transitionend', this);
			eventType(this.scroller, 'webkitTransitionEnd', this);
			eventType(this.scroller, 'oTransitionEnd', this);
			eventType(this.scroller, 'MSTransitionEnd', this);
		},

		getComputedPosition: function() {
			var matrix = window.getComputedStyle(this.scroller, null),
				x, y;

			if (this.options.useTransform) {
				matrix = matrix[utils.style.transform].split(')')[0].split(', ');
				x = +(matrix[12] || matrix[4]);
				y = +(matrix[13] || matrix[5]);
			} else {
				x = +matrix.left.replace(/[^-\d.]/g, '');
				y = +matrix.top.replace(/[^-\d.]/g, '');
			}

			return {
				x: x,
				y: y
			};
		},
		_initIndicators: function() {
			var interactive = this.options.interactiveScrollbars,
				customStyle = typeof this.options.scrollbars != 'string',
				indicators = [],
				indicator;

			var that = this;

			this.indicators = [];

			if (this.options.scrollbars) {
				// Vertical scrollbar
				if (this.options.scrollY) {
					indicator = {
						el: createDefaultScrollbar('v', interactive, this.options.scrollbars),
						interactive: interactive,
						defaultScrollbars: true,
						customStyle: customStyle,
						resize: this.options.resizeScrollbars,
						shrink: this.options.shrinkScrollbars,
						fade: this.options.fadeScrollbars,
						listenX: false
					};

					this.wrapper.appendChild(indicator.el);
					indicators.push(indicator);
				}

				// Horizontal scrollbar
				if (this.options.scrollX) {
					indicator = {
						el: createDefaultScrollbar('h', interactive, this.options.scrollbars),
						interactive: interactive,
						defaultScrollbars: true,
						customStyle: customStyle,
						resize: this.options.resizeScrollbars,
						shrink: this.options.shrinkScrollbars,
						fade: this.options.fadeScrollbars,
						listenY: false
					};

					this.wrapper.appendChild(indicator.el);
					indicators.push(indicator);
				}
			}

			if (this.options.indicators) {
				// TODO: check concat compatibility
				indicators = indicators.concat(this.options.indicators);
			}

			for (var i = indicators.length; i--;) {
				this.indicators.push(new Indicator(this, indicators[i]));
			}

			// TODO: check if we can use array.map (wide compatibility and performance issues)

			function _indicatorsMap(fn) {
				if (that.indicators) {
					for (var i = that.indicators.length; i--;) {
						fn.call(that.indicators[i]);
					}
				}
			}

			if (this.options.fadeScrollbars) {
				this.on('scrollEnd', function() {
					_indicatorsMap(function() {
						this.fade();
					});
				});

				this.on('scrollCancel', function() {
					_indicatorsMap(function() {
						this.fade();
					});
				});

				this.on('scrollStart', function() {
					_indicatorsMap(function() {
						this.fade(1);
					});
				});

				this.on('beforeScrollStart', function() {
					_indicatorsMap(function() {
						this.fade(1, true);
					});
				});
			}


			this.on('refresh', function() {
				_indicatorsMap(function() {
					this.refresh();
				});
			});

			this.on('destroy', function() {
				_indicatorsMap(function() {
					this.destroy();
				});

				delete this.indicators;
			});
		},

		_initWheel: function() {
			utils.addEvent(this.wrapper, 'wheel', this);
			utils.addEvent(this.wrapper, 'mousewheel', this);
			utils.addEvent(this.wrapper, 'DOMMouseScroll', this);

			this.on('destroy', function() {
				clearTimeout(this.wheelTimeout);
				this.wheelTimeout = null;
				utils.removeEvent(this.wrapper, 'wheel', this);
				utils.removeEvent(this.wrapper, 'mousewheel', this);
				utils.removeEvent(this.wrapper, 'DOMMouseScroll', this);
			});
		},

		_wheel: function(e) {
			if (!this.enabled) {
				return;
			}

			e.preventDefault();

			var wheelDeltaX, wheelDeltaY, newX, newY, that = this;

			if (this.wheelTimeout === undefined) {
				that._execEvent('scrollStart');
			}

			// Execute the scrollEnd event after 400ms the wheel stopped scrolling
			clearTimeout(this.wheelTimeout);
			this.wheelTimeout = setTimeout(function() {
				if (!that.options.snap) {
					that._execEvent('scrollEnd');
				}
				that.wheelTimeout = undefined;
			}, 400);

			if ('deltaX' in e) {
				if (e.deltaMode === 1) {
					wheelDeltaX = -e.deltaX * this.options.mouseWheelSpeed;
					wheelDeltaY = -e.deltaY * this.options.mouseWheelSpeed;
				} else {
					wheelDeltaX = -e.deltaX;
					wheelDeltaY = -e.deltaY;
				}
			} else if ('wheelDeltaX' in e) {
				wheelDeltaX = e.wheelDeltaX / 120 * this.options.mouseWheelSpeed;
				wheelDeltaY = e.wheelDeltaY / 120 * this.options.mouseWheelSpeed;
			} else if ('wheelDelta' in e) {
				wheelDeltaX = wheelDeltaY = e.wheelDelta / 120 * this.options.mouseWheelSpeed;
			} else if ('detail' in e) {
				wheelDeltaX = wheelDeltaY = -e.detail / 3 * this.options.mouseWheelSpeed;
			} else {
				return;
			}

			wheelDeltaX *= this.options.invertWheelDirection;
			wheelDeltaY *= this.options.invertWheelDirection;

			if (!this.hasVerticalScroll) {
				wheelDeltaX = wheelDeltaY;
				wheelDeltaY = 0;
			}

			if (this.options.snap) {
				newX = this.currentPage.pageX;
				newY = this.currentPage.pageY;

				if (wheelDeltaX > 0) {
					newX--;
				} else if (wheelDeltaX < 0) {
					newX++;
				}

				if (wheelDeltaY > 0) {
					newY--;
				} else if (wheelDeltaY < 0) {
					newY++;
				}

				this.goToPage(newX, newY);

				return;
			}

			newX = this.x + Math.round(this.hasHorizontalScroll ? wheelDeltaX : 0);
			newY = this.y + Math.round(this.hasVerticalScroll ? wheelDeltaY : 0);

			this.directionX = wheelDeltaX > 0 ? -1 : wheelDeltaX < 0 ? 1 : 0;
			this.directionY = wheelDeltaY > 0 ? -1 : wheelDeltaY < 0 ? 1 : 0;

			if (newX > 0) {
				newX = 0;
			} else if (newX < this.maxScrollX) {
				newX = this.maxScrollX;
			}

			if (newY > 0) {
				newY = 0;
			} else if (newY < this.maxScrollY) {
				newY = this.maxScrollY;
			}

			this.scrollTo(newX, newY, 0);

			// INSERT POINT: _wheel
		},

		_initSnap: function() {
			this.currentPage = {};

			if (typeof this.options.snap == 'string') {
				this.options.snap = this.scroller.querySelectorAll(this.options.snap);
			}

			this.on('refresh', function() {
				var i = 0,
					l, m = 0,
					n, cx, cy, x = 0,
					y, stepX = this.options.snapStepX || this.wrapperWidth,
					stepY = this.options.snapStepY || this.wrapperHeight,
					el;

				this.pages = [];

				if (!this.wrapperWidth || !this.wrapperHeight || !this.scrollerWidth || !this.scrollerHeight) {
					return;
				}

				if (this.options.snap === true) {
					cx = Math.round(stepX / 2);
					cy = Math.round(stepY / 2);

					while (x > -this.scrollerWidth) {
						this.pages[i] = [];
						l = 0;
						y = 0;

						while (y > -this.scrollerHeight) {
							this.pages[i][l] = {
								x: Math.max(x, this.maxScrollX),
								y: Math.max(y, this.maxScrollY),
								width: stepX,
								height: stepY,
								cx: x - cx,
								cy: y - cy
							};

							y -= stepY;
							l++;
						}

						x -= stepX;
						i++;
					}
				} else {
					el = this.options.snap;
					l = el.length;
					n = -1;

					for (; i < l; i++) {
						if (i === 0 || el[i].offsetLeft <= el[i - 1].offsetLeft) {
							m = 0;
							n++;
						}

						if (!this.pages[m]) {
							this.pages[m] = [];
						}

						x = Math.max(-el[i].offsetLeft, this.maxScrollX);
						y = Math.max(-el[i].offsetTop, this.maxScrollY);
						cx = x - Math.round(el[i].offsetWidth / 2);
						cy = y - Math.round(el[i].offsetHeight / 2);

						this.pages[m][n] = {
							x: x,
							y: y,
							width: el[i].offsetWidth,
							height: el[i].offsetHeight,
							cx: cx,
							cy: cy
						};

						if (x > this.maxScrollX) {
							m++;
						}
					}
				}

				this.goToPage(this.currentPage.pageX || 0, this.currentPage.pageY || 0, 0);

				// Update snap threshold if needed
				if (this.options.snapThreshold % 1 === 0) {
					this.snapThresholdX = this.options.snapThreshold;
					this.snapThresholdY = this.options.snapThreshold;
				} else {
					this.snapThresholdX = Math.round(this.pages[this.currentPage.pageX][this.currentPage.pageY].width * this.options.snapThreshold);
					this.snapThresholdY = Math.round(this.pages[this.currentPage.pageX][this.currentPage.pageY].height * this.options.snapThreshold);
				}
			});

			this.on('flick', function() {
				var time = this.options.snapSpeed || Math.max(
				Math.max(
				Math.min(Math.abs(this.x - this.startX), 1000), Math.min(Math.abs(this.y - this.startY), 1000)), 300);

				this.goToPage(
				this.currentPage.pageX + this.directionX, this.currentPage.pageY + this.directionY, time);
			});
		},

		_nearestSnap: function(x, y) {
			if (!this.pages.length) {
				return {
					x: 0,
					y: 0,
					pageX: 0,
					pageY: 0
				};
			}

			var i = 0,
				l = this.pages.length,
				m = 0;

			// Check if we exceeded the snap threshold
			if (Math.abs(x - this.absStartX) < this.snapThresholdX && Math.abs(y - this.absStartY) < this.snapThresholdY) {
				return this.currentPage;
			}

			if (x > 0) {
				x = 0;
			} else if (x < this.maxScrollX) {
				x = this.maxScrollX;
			}

			if (y > 0) {
				y = 0;
			} else if (y < this.maxScrollY) {
				y = this.maxScrollY;
			}

			for (; i < l; i++) {
				if (x >= this.pages[i][0].cx) {
					x = this.pages[i][0].x;
					break;
				}
			}

			l = this.pages[i].length;

			for (; m < l; m++) {
				if (y >= this.pages[0][m].cy) {
					y = this.pages[0][m].y;
					break;
				}
			}

			if (i == this.currentPage.pageX) {
				i += this.directionX;

				if (i < 0) {
					i = 0;
				} else if (i >= this.pages.length) {
					i = this.pages.length - 1;
				}

				x = this.pages[i][0].x;
			}

			if (m == this.currentPage.pageY) {
				m += this.directionY;

				if (m < 0) {
					m = 0;
				} else if (m >= this.pages[0].length) {
					m = this.pages[0].length - 1;
				}

				y = this.pages[0][m].y;
			}

			return {
				x: x,
				y: y,
				pageX: i,
				pageY: m
			};
		},

		goToPage: function(x, y, time, easing) {
			easing = easing || this.options.bounceEasing;

			if (x >= this.pages.length) {
				x = this.pages.length - 1;
			} else if (x < 0) {
				x = 0;
			}

			if (y >= this.pages[x].length) {
				y = this.pages[x].length - 1;
			} else if (y < 0) {
				y = 0;
			}

			var posX = this.pages[x][y].x,
				posY = this.pages[x][y].y;

			time = time === undefined ? this.options.snapSpeed || Math.max(
			Math.max(
			Math.min(Math.abs(posX - this.x), 1000), Math.min(Math.abs(posY - this.y), 1000)), 300) : time;

			this.currentPage = {
				x: posX,
				y: posY,
				pageX: x,
				pageY: y
			};

			this.scrollTo(posX, posY, time, easing);
		},

		next: function(time, easing) {
			var x = this.currentPage.pageX,
				y = this.currentPage.pageY;

			x++;

			if (x >= this.pages.length && this.hasVerticalScroll) {
				x = 0;
				y++;
			}

			this.goToPage(x, y, time, easing);
		},

		prev: function(time, easing) {
			var x = this.currentPage.pageX,
				y = this.currentPage.pageY;

			x--;

			if (x < 0 && this.hasVerticalScroll) {
				x = 0;
				y--;
			}

			this.goToPage(x, y, time, easing);
		},

		_initKeys: function(e) {
			// default key bindings
			var keys = {
				pageUp: 33,
				pageDown: 34,
				end: 35,
				home: 36,
				left: 37,
				up: 38,
				right: 39,
				down: 40
			};
			var i;

			// if you give me characters I give you keycode
			if (typeof this.options.keyBindings == 'object') {
				for (i in this.options.keyBindings) {
					if (typeof this.options.keyBindings[i] == 'string') {
						this.options.keyBindings[i] = this.options.keyBindings[i].toUpperCase().charCodeAt(0);
					}
				}
			} else {
				this.options.keyBindings = {};
			}

			for (i in keys) {
				this.options.keyBindings[i] = this.options.keyBindings[i] || keys[i];
			}

			utils.addEvent(window, 'keydown', this);

			this.on('destroy', function() {
				utils.removeEvent(window, 'keydown', this);
			});
		},

		_key: function(e) {
			if (!this.enabled) {
				return;
			}

			var snap = this.options.snap,
				// we are using this alot, better to cache it
				newX = snap ? this.currentPage.pageX : this.x,
				newY = snap ? this.currentPage.pageY : this.y,
				now = utils.getTime(),
				prevTime = this.keyTime || 0,
				acceleration = 0.250,
				pos;

			if (this.options.useTransition && this.isInTransition) {
				pos = this.getComputedPosition();

				this._translate(Math.round(pos.x), Math.round(pos.y));
				this.isInTransition = false;
			}

			this.keyAcceleration = now - prevTime < 200 ? Math.min(this.keyAcceleration + acceleration, 50) : 0;

			switch (e.keyCode) {
			case this.options.keyBindings.pageUp:
				if (this.hasHorizontalScroll && !this.hasVerticalScroll) {
					newX += snap ? 1 : this.wrapperWidth;
				} else {
					newY += snap ? 1 : this.wrapperHeight;
				}
				break;
			case this.options.keyBindings.pageDown:
				if (this.hasHorizontalScroll && !this.hasVerticalScroll) {
					newX -= snap ? 1 : this.wrapperWidth;
				} else {
					newY -= snap ? 1 : this.wrapperHeight;
				}
				break;
			case this.options.keyBindings.end:
				newX = snap ? this.pages.length - 1 : this.maxScrollX;
				newY = snap ? this.pages[0].length - 1 : this.maxScrollY;
				break;
			case this.options.keyBindings.home:
				newX = 0;
				newY = 0;
				break;
			case this.options.keyBindings.left:
				newX += snap ? -1 : 5 + this.keyAcceleration >> 0;
				break;
			case this.options.keyBindings.up:
				newY += snap ? 1 : 5 + this.keyAcceleration >> 0;
				break;
			case this.options.keyBindings.right:
				newX -= snap ? -1 : 5 + this.keyAcceleration >> 0;
				break;
			case this.options.keyBindings.down:
				newY -= snap ? 1 : 5 + this.keyAcceleration >> 0;
				break;
			default:
				return;
			}

			if (snap) {
				this.goToPage(newX, newY);
				return;
			}

			if (newX > 0) {
				newX = 0;
				this.keyAcceleration = 0;
			} else if (newX < this.maxScrollX) {
				newX = this.maxScrollX;
				this.keyAcceleration = 0;
			}

			if (newY > 0) {
				newY = 0;
				this.keyAcceleration = 0;
			} else if (newY < this.maxScrollY) {
				newY = this.maxScrollY;
				this.keyAcceleration = 0;
			}

			this.scrollTo(newX, newY, 0);

			this.keyTime = now;
		},

		_animate: function(destX, destY, duration, easingFn) {
			var that = this,
				startX = this.x,
				startY = this.y,
				startTime = utils.getTime(),
				destTime = startTime + duration;

			function step() {
				var now = utils.getTime(),
					newX, newY, easing;

				if (now >= destTime) {
					that.isAnimating = false;
					that._translate(destX, destY);

					if (!that.resetPosition(that.options.bounceTime)) {
						that._execEvent('scrollEnd');
					}

					return;
				}

				now = (now - startTime) / duration;
				easing = easingFn(now);
				newX = (destX - startX) * easing + startX;
				newY = (destY - startY) * easing + startY;
				that._translate(newX, newY);

				if (that.isAnimating) {
					rAF(step);
				}
			}

			this.isAnimating = true;
			step();
		},
		handleEvent: function(e) {
			switch (e.type) {
			case 'touchstart':
			case 'pointerdown':
			case 'MSPointerDown':
			case 'mousedown':
				this._start(e);
				break;
			case 'touchmove':
			case 'pointermove':
			case 'MSPointerMove':
			case 'mousemove':
				this._move(e);
				break;
			case 'touchend':
			case 'pointerup':
			case 'MSPointerUp':
			case 'mouseup':
			case 'touchcancel':
			case 'pointercancel':
			case 'MSPointerCancel':
			case 'mousecancel':
				this._end(e);
				break;
			case 'orientationchange':
			case 'resize':
				this._resize();
				break;
			case 'transitionend':
			case 'webkitTransitionEnd':
			case 'oTransitionEnd':
			case 'MSTransitionEnd':
				this._transitionEnd(e);
				break;
			case 'wheel':
			case 'DOMMouseScroll':
			case 'mousewheel':
				this._wheel(e);
				break;
			case 'keydown':
				this._key(e);
				break;
			case 'click':
				if (this.enabled && !e._constructed) {
					e.preventDefault();
					e.stopPropagation();
				}
				break;
			}
		}
	};

	function createDefaultScrollbar(direction, interactive, type) {
		var scrollbar = document.createElement('div'),
			indicator = document.createElement('div');

		if (type === true) {
			scrollbar.style.cssText = 'position:absolute;z-index:9999';
			indicator.style.cssText = '-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:absolute;background:rgba(0,0,0,0.5);border:1px solid rgba(255,255,255,0.9);border-radius:3px';
		}

		indicator.className = 'iScrollIndicator';

		if (direction == 'h') {
			if (type === true) {
				scrollbar.style.cssText += ';height:7px;left:2px;right:2px;bottom:0';
				indicator.style.height = '100%';
			}
			scrollbar.className = 'iScrollHorizontalScrollbar';
		} else {
			if (type === true) {
				scrollbar.style.cssText += ';width:7px;bottom:2px;top:2px;right:1px';
				indicator.style.width = '100%';
			}
			scrollbar.className = 'iScrollVerticalScrollbar';
		}

		scrollbar.style.cssText += ';overflow:hidden';

		if (!interactive) {
			scrollbar.style.pointerEvents = 'none';
		}

		scrollbar.appendChild(indicator);

		return scrollbar;
	}

	function Indicator(scroller, options) {
		this.wrapper = typeof options.el == 'string' ? document.querySelector(options.el) : options.el;
		this.wrapperStyle = this.wrapper.style;
		this.indicator = this.wrapper.children[0];
		this.indicatorStyle = this.indicator.style;
		this.scroller = scroller;

		this.options = {
			listenX: true,
			listenY: true,
			interactive: false,
			resize: true,
			defaultScrollbars: false,
			shrink: false,
			fade: false,
			speedRatioX: 0,
			speedRatioY: 0
		};

		for (var i in options) {
			this.options[i] = options[i];
		}

		this.sizeRatioX = 1;
		this.sizeRatioY = 1;
		this.maxPosX = 0;
		this.maxPosY = 0;

		if (this.options.interactive) {
			if (!this.options.disableTouch) {
				utils.addEvent(this.indicator, 'touchstart', this);
				utils.addEvent(window, 'touchend', this);
			}
			if (!this.options.disablePointer) {
				utils.addEvent(this.indicator, utils.prefixPointerEvent('pointerdown'), this);
				utils.addEvent(window, utils.prefixPointerEvent('pointerup'), this);
			}
			if (!this.options.disableMouse) {
				utils.addEvent(this.indicator, 'mousedown', this);
				utils.addEvent(window, 'mouseup', this);
			}
		}

		if (this.options.fade) {
			this.wrapperStyle[utils.style.transform] = this.scroller.translateZ;
			var durationProp = utils.style.transitionDuration;
			if (!durationProp) {
				return;
			}
			this.wrapperStyle[durationProp] = utils.isBadAndroid ? '0.0001ms' : '0ms';
			// remove 0.0001ms
			var self = this;
			if (utils.isBadAndroid) {
				rAF(function() {
					if (self.wrapperStyle[durationProp] === '0.0001ms') {
						self.wrapperStyle[durationProp] = '0s';
					}
				});
			}
			this.wrapperStyle.opacity = '0';
		}
	}

	Indicator.prototype = {
		handleEvent: function(e) {
			switch (e.type) {
			case 'touchstart':
			case 'pointerdown':
			case 'MSPointerDown':
			case 'mousedown':
				this._start(e);
				break;
			case 'touchmove':
			case 'pointermove':
			case 'MSPointerMove':
			case 'mousemove':
				this._move(e);
				break;
			case 'touchend':
			case 'pointerup':
			case 'MSPointerUp':
			case 'mouseup':
			case 'touchcancel':
			case 'pointercancel':
			case 'MSPointerCancel':
			case 'mousecancel':
				this._end(e);
				break;
			}
		},

		destroy: function() {
			if (this.options.fadeScrollbars) {
				clearTimeout(this.fadeTimeout);
				this.fadeTimeout = null;
			}
			if (this.options.interactive) {
				utils.removeEvent(this.indicator, 'touchstart', this);
				utils.removeEvent(this.indicator, utils.prefixPointerEvent('pointerdown'), this);
				utils.removeEvent(this.indicator, 'mousedown', this);

				utils.removeEvent(window, 'touchmove', this);
				utils.removeEvent(window, utils.prefixPointerEvent('pointermove'), this);
				utils.removeEvent(window, 'mousemove', this);

				utils.removeEvent(window, 'touchend', this);
				utils.removeEvent(window, utils.prefixPointerEvent('pointerup'), this);
				utils.removeEvent(window, 'mouseup', this);
			}

			if (this.options.defaultScrollbars) {
				this.wrapper.parentNode.removeChild(this.wrapper);
			}
		},

		_start: function(e) {
			var point = e.touches ? e.touches[0] : e;

			e.preventDefault();
			e.stopPropagation();

			this.transitionTime();

			this.initiated = true;
			this.moved = false;
			this.lastPointX = point.pageX;
			this.lastPointY = point.pageY;

			this.startTime = utils.getTime();

			if (!this.options.disableTouch) {
				utils.addEvent(window, 'touchmove', this);
			}
			if (!this.options.disablePointer) {
				utils.addEvent(window, utils.prefixPointerEvent('pointermove'), this);
			}
			if (!this.options.disableMouse) {
				utils.addEvent(window, 'mousemove', this);
			}

			this.scroller._execEvent('beforeScrollStart');
		},

		_move: function(e) {
			var point = e.touches ? e.touches[0] : e,
				deltaX, deltaY, newX, newY, timestamp = utils.getTime();

			if (!this.moved) {
				this.scroller._execEvent('scrollStart');
			}

			this.moved = true;

			deltaX = point.pageX - this.lastPointX;
			this.lastPointX = point.pageX;

			deltaY = point.pageY - this.lastPointY;
			this.lastPointY = point.pageY;

			newX = this.x + deltaX;
			newY = this.y + deltaY;

			this._pos(newX, newY);

			// INSERT POINT: indicator._move

			e.preventDefault();
			e.stopPropagation();
		},

		_end: function(e) {
			if (!this.initiated) {
				return;
			}

			this.initiated = false;

			e.preventDefault();
			e.stopPropagation();

			utils.removeEvent(window, 'touchmove', this);
			utils.removeEvent(window, utils.prefixPointerEvent('pointermove'), this);
			utils.removeEvent(window, 'mousemove', this);

			if (this.scroller.options.snap) {
				var snap = this.scroller._nearestSnap(this.scroller.x, this.scroller.y);

				var time = this.options.snapSpeed || Math.max(
				Math.max(
				Math.min(Math.abs(this.scroller.x - snap.x), 1000), Math.min(Math.abs(this.scroller.y - snap.y), 1000)), 300);

				if (this.scroller.x != snap.x || this.scroller.y != snap.y) {
					this.scroller.directionX = 0;
					this.scroller.directionY = 0;
					this.scroller.currentPage = snap;
					this.scroller.scrollTo(snap.x, snap.y, time, this.scroller.options.bounceEasing);
				}
			}

			if (this.moved) {
				this.scroller._execEvent('scrollEnd');
			}
		},

		transitionTime: function(time) {
			time = time || 0;
			var durationProp = utils.style.transitionDuration;
			if (!durationProp) {
				return;
			}

			this.indicatorStyle[durationProp] = time + 'ms';

			if (!time && utils.isBadAndroid) {
				this.indicatorStyle[durationProp] = '0.0001ms';
				// remove 0.0001ms
				var self = this;
				rAF(function() {
					if (self.indicatorStyle[durationProp] === '0.0001ms') {
						self.indicatorStyle[durationProp] = '0s';
					}
				});
			}
		},

		transitionTimingFunction: function(easing) {
			this.indicatorStyle[utils.style.transitionTimingFunction] = easing;
		},

		refresh: function() {
			this.transitionTime();

			if (this.options.listenX && !this.options.listenY) {
				this.indicatorStyle.display = this.scroller.hasHorizontalScroll ? 'block' : 'none';
			} else if (this.options.listenY && !this.options.listenX) {
				this.indicatorStyle.display = this.scroller.hasVerticalScroll ? 'block' : 'none';
			} else {
				this.indicatorStyle.display = this.scroller.hasHorizontalScroll || this.scroller.hasVerticalScroll ? 'block' : 'none';
			}

			if (this.scroller.hasHorizontalScroll && this.scroller.hasVerticalScroll) {
				utils.addClass(this.wrapper, 'iScrollBothScrollbars');
				utils.removeClass(this.wrapper, 'iScrollLoneScrollbar');

				if (this.options.defaultScrollbars && this.options.customStyle) {
					if (this.options.listenX) {
						this.wrapper.style.right = '8px';
					} else {
						this.wrapper.style.bottom = '8px';
					}
				}
			} else {
				utils.removeClass(this.wrapper, 'iScrollBothScrollbars');
				utils.addClass(this.wrapper, 'iScrollLoneScrollbar');

				if (this.options.defaultScrollbars && this.options.customStyle) {
					if (this.options.listenX) {
						this.wrapper.style.right = '2px';
					} else {
						this.wrapper.style.bottom = '2px';
					}
				}
			}

			var r = this.wrapper.offsetHeight; // force refresh

			if (this.options.listenX) {
				this.wrapperWidth = this.wrapper.clientWidth;
				if (this.options.resize) {
					this.indicatorWidth = Math.max(Math.round(this.wrapperWidth * this.wrapperWidth / (this.scroller.scrollerWidth || this.wrapperWidth || 1)), 8);
					this.indicatorStyle.width = this.indicatorWidth + 'px';
				} else {
					this.indicatorWidth = this.indicator.clientWidth;
				}

				this.maxPosX = this.wrapperWidth - this.indicatorWidth;

				if (this.options.shrink == 'clip') {
					this.minBoundaryX = -this.indicatorWidth + 8;
					this.maxBoundaryX = this.wrapperWidth - 8;
				} else {
					this.minBoundaryX = 0;
					this.maxBoundaryX = this.maxPosX;
				}

				this.sizeRatioX = this.options.speedRatioX || (this.scroller.maxScrollX && (this.maxPosX / this.scroller.maxScrollX));
			}

			if (this.options.listenY) {
				this.wrapperHeight = this.wrapper.clientHeight;
				if (this.options.resize) {
					this.indicatorHeight = Math.max(Math.round(this.wrapperHeight * this.wrapperHeight / (this.scroller.scrollerHeight || this.wrapperHeight || 1)), 8);
					this.indicatorStyle.height = this.indicatorHeight + 'px';
				} else {
					this.indicatorHeight = this.indicator.clientHeight;
				}

				this.maxPosY = this.wrapperHeight - this.indicatorHeight;

				if (this.options.shrink == 'clip') {
					this.minBoundaryY = -this.indicatorHeight + 8;
					this.maxBoundaryY = this.wrapperHeight - 8;
				} else {
					this.minBoundaryY = 0;
					this.maxBoundaryY = this.maxPosY;
				}

				this.maxPosY = this.wrapperHeight - this.indicatorHeight;
				this.sizeRatioY = this.options.speedRatioY || (this.scroller.maxScrollY && (this.maxPosY / this.scroller.maxScrollY));
			}

			this.updatePosition();
		},

		updatePosition: function() {
			var x = this.options.listenX && Math.round(this.sizeRatioX * this.scroller.x) || 0,
				y = this.options.listenY && Math.round(this.sizeRatioY * this.scroller.y) || 0;

			if (!this.options.ignoreBoundaries) {
				if (x < this.minBoundaryX) {
					if (this.options.shrink == 'scale') {
						this.width = Math.max(this.indicatorWidth + x, 8);
						this.indicatorStyle.width = this.width + 'px';
					}
					x = this.minBoundaryX;
				} else if (x > this.maxBoundaryX) {
					if (this.options.shrink == 'scale') {
						this.width = Math.max(this.indicatorWidth - (x - this.maxPosX), 8);
						this.indicatorStyle.width = this.width + 'px';
						x = this.maxPosX + this.indicatorWidth - this.width;
					} else {
						x = this.maxBoundaryX;
					}
				} else if (this.options.shrink == 'scale' && this.width != this.indicatorWidth) {
					this.width = this.indicatorWidth;
					this.indicatorStyle.width = this.width + 'px';
				}

				if (y < this.minBoundaryY) {
					if (this.options.shrink == 'scale') {
						this.height = Math.max(this.indicatorHeight + y * 3, 8);
						this.indicatorStyle.height = this.height + 'px';
					}
					y = this.minBoundaryY;
				} else if (y > this.maxBoundaryY) {
					if (this.options.shrink == 'scale') {
						this.height = Math.max(this.indicatorHeight - (y - this.maxPosY) * 3, 8);
						this.indicatorStyle.height = this.height + 'px';
						y = this.maxPosY + this.indicatorHeight - this.height;
					} else {
						y = this.maxBoundaryY;
					}
				} else if (this.options.shrink == 'scale' && this.height != this.indicatorHeight) {
					this.height = this.indicatorHeight;
					this.indicatorStyle.height = this.height + 'px';
				}
			}

			this.x = x;
			this.y = y;

			if (this.scroller.options.useTransform) {
				this.indicatorStyle[utils.style.transform] = 'translate(' + x + 'px,' + y + 'px)' + this.scroller.translateZ;
			} else {
				this.indicatorStyle.left = x + 'px';
				this.indicatorStyle.top = y + 'px';
			}
		},

		_pos: function(x, y) {
			if (x < 0) {
				x = 0;
			} else if (x > this.maxPosX) {
				x = this.maxPosX;
			}

			if (y < 0) {
				y = 0;
			} else if (y > this.maxPosY) {
				y = this.maxPosY;
			}

			x = this.options.listenX ? Math.round(x / this.sizeRatioX) : this.scroller.x;
			y = this.options.listenY ? Math.round(y / this.sizeRatioY) : this.scroller.y;

			this.scroller.scrollTo(x, y);
		},

		fade: function(val, hold) {
			if (hold && !this.visible) {
				return;
			}

			clearTimeout(this.fadeTimeout);
			this.fadeTimeout = null;

			var time = val ? 250 : 500,
				delay = val ? 0 : 300;

			val = val ? '1' : '0';

			this.wrapperStyle[utils.style.transitionDuration] = time + 'ms';

			this.fadeTimeout = setTimeout((function(val) {
				this.wrapperStyle.opacity = val;
				this.visible = +val;
			}).bind(this, val), delay);
		}
	};

	IScroll.utils = utils;

	if (typeof module != 'undefined' && module.exports) {
		module.exports = IScroll;
	} else if (typeof define == 'function' && define.amd) {
		define(function() {
			return IScroll;
		});
	} else {
		window.IScroll = IScroll;
	}

})(window, document, Math);
/* jshint debug: true, expr: true */

;
(function($) {

	/* Constants & defaults. */
	var DATA_COLOR = 'data-ab-color';
	var DATA_PARENT = 'data-ab-parent';
	var DATA_CSS_BG = 'data-ab-css-background';
	var EVENT_CF = 'ab-color-found';

	var DEFAULTS = {
		selector: '[data-adaptive-background]',
		parent: null,
		exclude: ['rgb(0,0,0)', 'rgb(255,255,255)'],
		normalizeTextColor: false,
		normalizedTextColors: {
			light: "#fff",
			dark: "#000"
		},
		lumaClasses: {
			light: "ab-light",
			dark: "ab-dark"
		}
	};

	// Include RGBaster - https://github.com/briangonzalez/rgbaster.js
	/* jshint ignore:start */
	!
	function(n) {
		"use strict";
		var t = function() {
				return document.createElement("canvas").getContext("2d")
			},
			e = function(n, e) {
				var a = new Image,
					o = n.src || n;
				"data:" !== o.substring(0, 5) && (a.crossOrigin = "Anonymous"), a.onload = function() {
					var n = t("2d");
					n.drawImage(a, 0, 0);
					var o = n.getImageData(0, 0, a.width, a.height);
					e && e(o.data)
				}, a.src = o
			},
			a = function(n) {
				return ["rgb(", n, ")"].join("")
			},
			o = function(n) {
				return n.map(function(n) {
					return a(n.name)
				})
			},
			r = 5,
			i = 10,
			c = {};
		c.colors = function(n, t) {
			t = t || {};
			var c = t.exclude || [],
				u = t.paletteSize || i;
			e(n, function(e) {
				for (var i = n.width * n.height || e.length, m = {}, s = "", d = [], f = {
					dominant: {
						name: "",
						count: 0
					},
					palette: Array.apply(null, new Array(u)).map(Boolean).map(function() {
						return {
							name: "0,0,0",
							count: 0
						}
					})
				}, l = 0; i > l;) {
					if (d[0] = e[l], d[1] = e[l + 1], d[2] = e[l + 2], s = d.join(","), m[s] = s in m ? m[s] + 1 : 1, -1 === c.indexOf(a(s))) {
						var g = m[s];
						g > f.dominant.count ? (f.dominant.name = s, f.dominant.count = g) : f.palette.some(function(n) {
							return g > n.count ? (n.name = s, n.count = g, !0) : void 0
						})
					}
					l += 4 * r
				}
				if (t.success) {
					var p = o(f.palette);
					t.success({
						dominant: a(f.dominant.name),
						secondary: p[0],
						palette: p
					})
				}
			})
		}, n.RGBaster = n.RGBaster || c
	}(window); /* jshint ignore:end */


/*
    Our main function declaration.
  */
	$.adaptiveBackground = {
		run: function(options) {
			var opts = $.extend({}, DEFAULTS, options);

/* Loop over each element, waiting for it to load
         then finding its color, and triggering the
         color found event when color has been found.
      */
			$(opts.selector).each(function(index, el) {
				var $this = $(this);

/*  Small helper functions which applies
            colors, attrs, triggers events, etc.
        */
				var handleColors = function() {
						var img = useCSSBackground() ? getCSSBackground() : $this[0];

						RGBaster.colors(img, {
							paletteSize: 20,
							exclude: opts.exclude,
							success: function(colors) {
								$this.attr(DATA_COLOR, colors.dominant);
								$this.trigger(EVENT_CF, {
									color: colors.dominant,
									palette: colors.palette
								});
							}
						});

					};

				var useCSSBackground = function() {
						var attr = $this.attr(DATA_CSS_BG);
						return (typeof attr !== typeof undefined && attr !== false);
					};

				var getCSSBackground = function() {
						var str = $this.css('background-image');
						var regex = /\(([^)]+)\)/;
						var match = regex.exec(str)[1].replace(/"/g, '')
						return match;
					};

				/* Subscribe to our color-found event. */
				$this.on(EVENT_CF, function(ev, data) {

					// Try to find the parent.
					var $parent;
					if (opts.parent && $this.parents(opts.parent).length) {
						$parent = $this.parents(opts.parent);
					} else if ($this.attr(DATA_PARENT) && $this.parents($this.attr(DATA_PARENT)).length) {
						$parent = $this.parents($this.attr(DATA_PARENT));
					} else if (useCSSBackground()) {
						$parent = $this;
					} else if (opts.parent) {
						$parent = $this.parents(opts.parent);
					} else {
						$parent = $this.parent();
					}

					$parent.css({
						backgroundColor: data.color
					});
					$parent.parent('.wbalist_item').css({
						backgroundColor: data.color
					});
					$parent.children('.bg_wtop_banner').css("background-image", "linear-gradient(" + data.color + ",transparent)");
					// Helper function to calculate yiq - http://en.wikipedia.org/wiki/YIQ
					var getYIQ = function(color) {
							var rgb = color.match(/\d+/g);
							return ((rgb[0] * 299) + (rgb[1] * 587) + (rgb[2] * 114)) / 1000;
						};

					var getNormalizedTextColor = function(color) {
							return getYIQ(color) >= 128 ? opts.normalizedTextColors.dark : opts.normalizedTextColors.light;
						};

					var getLumaClass = function(color) {
							return getYIQ(color) <= 128 ? opts.lumaClasses.dark : opts.lumaClasses.light;
						};

					// Normalize the text color based on luminance.
					if (opts.normalizeTextColor) $parent.css({
						color: getNormalizedTextColor(data.color)
					});

					// Add a class based on luminance.
					$parent.addClass(getLumaClass(data.color)).attr('data-ab-yaq', getYIQ(data.color));

					opts.success && opts.success($this, data);
				});

				/* Handle the colors. */
				handleColors();

			});
		}
	};

})(jQuery);
;(function(win, lib) {
	var doc = win.document;
	var docEl = doc.documentElement;
	var metaEl = doc.querySelector('meta[name="viewport"]');
	var flexibleEl = doc.querySelector('meta[name="flexible"]');
	var dpr = 0;
	var scale = 0;
	var tid;
	var flexible = lib.flexible || (lib.flexible = {});

	if (metaEl) {
		var match = metaEl.getAttribute('content').match(/initial\-scale=([\d\.]+)/);
		if (match) {
			scale = parseFloat(match[1]);
			dpr = parseInt(1 / scale);
		}
	} else if (flexibleEl) {
		var content = flexibleEl.getAttribute('content');
		if (content) {
			var initialDpr = content.match(/initial\-dpr=([\d\.]+)/);
			var maximumDpr = content.match(/maximum\-dpr=([\d\.]+)/);
			if (initialDpr) {
				dpr = parseFloat(initialDpr[1]);
				scale = parseFloat((1 / dpr).toFixed(2));
			}
			if (maximumDpr) {
				dpr = parseFloat(maximumDpr[1]);
				scale = parseFloat((1 / dpr).toFixed(2));
			}
		}
	}

	if (!dpr && !scale) {
		var isAndroid = win.navigator.appVersion.match(/android/gi);
		var isIPhone = win.navigator.appVersion.match(/iphone/gi);
		var devicePixelRatio = win.devicePixelRatio;
		if (isIPhone) {
			if (devicePixelRatio >= 3 && (!dpr || dpr >= 3)) {
				dpr = 3;
			} else if (devicePixelRatio >= 2 && (!dpr || dpr >= 2)) {
				dpr = 2;
			} else {
				dpr = 1;
			}
		} else {
			dpr = 1;
		}
		scale = 1 / dpr;
	}

	docEl.setAttribute('data-dpr', dpr);
	if (!metaEl) {
		metaEl = doc.createElement('meta');
		metaEl.setAttribute('name', 'viewport');
		metaEl.setAttribute('content', 'initial-scale=' + scale + ', maximum-scale=' + scale + ', minimum-scale=' + scale + ', user-scalable=no');
		if (docEl.firstElementChild) {
			docEl.firstElementChild.appendChild(metaEl);
		} else {
			var wrap = doc.createElement('div');
			wrap.appendChild(metaEl);
			doc.write(wrap.innerHTML);
		}
	}

	function refreshRem() {
		var width = docEl.getBoundingClientRect().width;
		if (width / dpr > 768) {
			width = 768 * dpr;
		}
		var rem = width / 10;
		docEl.style.fontSize = rem + 'px';
		flexible.rem = win.rem = rem;
	}

	win.addEventListener('resize', function() {
		clearTimeout(tid);
		tid = setTimeout(refreshRem, 300);
	}, false);
	win.addEventListener('pageshow', function(e) {
		if (e.persisted) {
			clearTimeout(tid);
			tid = setTimeout(refreshRem, 300);
		}
	}, false);

	refreshRem();

	flexible.dpr = win.dpr = dpr;
	flexible.refreshRem = refreshRem;
	flexible.rem2px = function(d) {
		var val = parseFloat(d) * this.rem;
		if (typeof d === 'string' && d.match(/rem$/)) {
			val += 'px';
		}
		return val;
	};
	flexible.px2rem = function(d) {
		var val = parseFloat(d) / this.rem;
		if (typeof d === 'string' && d.match(/px$/)) {
			val += 'rem';
		}
		return val;
	};

})(window, window['lib'] || (window['lib'] = {}));
/*! Lazy Load 1.9.3 - MIT license - Copyright 2010-2013 Mika Tuupola */
!
function(a, b, c, d) {
	var e = a(b);
	a.fn.lazyload = function(f) {
		function g() {
			var b = 0;
			i.each(function() {
				var c = a(this);
				if (!j.skip_invisible || c.is(":visible")) if (a.abovethetop(this, j) || a.leftofbegin(this, j));
				else if (a.belowthefold(this, j) || a.rightoffold(this, j)) {
					if (++b > j.failure_limit) return !1
				} else c.trigger("appear"), b = 0
			})
		}
		var h, i = this,
			j = {
				threshold: 0,
				failure_limit: 0,
				event: "scroll",
				effect: "show",
				container: b,
				data_attribute: "original",
				skip_invisible: !0,
				appear: null,
				load: null,
				placeholder: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
			};
		return f && (d !== f.failurelimit && (f.failure_limit = f.failurelimit, delete f.failurelimit), d !== f.effectspeed && (f.effect_speed = f.effectspeed, delete f.effectspeed), a.extend(j, f)), h = j.container === d || j.container === b ? e : a(j.container), 0 === j.event.indexOf("scroll") && h.bind(j.event, function() {
			return g()
		}), this.each(function() {
			var b = this,
				c = a(b);
			b.loaded = !1, (c.attr("src") === d || c.attr("src") === !1) && c.is("img") && c.attr("src", j.placeholder), c.one("appear", function() {
				if (!this.loaded) {
					if (j.appear) {
						var d = i.length;
						j.appear.call(b, d, j)
					}
					a("<img />").bind("load", function() {
						var d = c.attr("data-" + j.data_attribute);
						c.hide(), c.is("img") ? c.attr("src", d) : c.css("background-image", "url('" + d + "')"), c[j.effect](j.effect_speed), b.loaded = !0;
						var e = a.grep(i, function(a) {
							return !a.loaded
						});
						if (i = a(e), j.load) {
							var f = i.length;
							j.load.call(b, f, j)
						}
					}).attr("src", c.attr("data-" + j.data_attribute))
				}
			}), 0 !== j.event.indexOf("scroll") && c.bind(j.event, function() {
				b.loaded || c.trigger("appear")
			})
		}), e.bind("resize", function() {
			g()
		}), /(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion) && e.bind("pageshow", function(b) {
			b.originalEvent && b.originalEvent.persisted && i.each(function() {
				a(this).trigger("appear")
			})
		}), a(c).ready(function() {
			g()
		}), this
	}, a.belowthefold = function(c, f) {
		var g;
		return g = f.container === d || f.container === b ? (b.innerHeight ? b.innerHeight : e.height()) + e.scrollTop() : a(f.container).offset().top + a(f.container).height(), g <= a(c).offset().top - f.threshold
	}, a.rightoffold = function(c, f) {
		var g;
		return g = f.container === d || f.container === b ? e.width() + e.scrollLeft() : a(f.container).offset().left + a(f.container).width(), g <= a(c).offset().left - f.threshold
	}, a.abovethetop = function(c, f) {
		var g;
		return g = f.container === d || f.container === b ? e.scrollTop() : a(f.container).offset().top, g >= a(c).offset().top + f.threshold + a(c).height()
	}, a.leftofbegin = function(c, f) {
		var g;
		return g = f.container === d || f.container === b ? e.scrollLeft() : a(f.container).offset().left, g >= a(c).offset().left + f.threshold + a(c).width()
	}, a.inviewport = function(b, c) {
		return !(a.rightoffold(b, c) || a.leftofbegin(b, c) || a.belowthefold(b, c) || a.abovethetop(b, c))
	}, a.extend(a.expr[":"], {
		"below-the-fold": function(b) {
			return a.belowthefold(b, {
				threshold: 0
			})
		},
		"above-the-top": function(b) {
			return !a.belowthefold(b, {
				threshold: 0
			})
		},
		"right-of-screen": function(b) {
			return a.rightoffold(b, {
				threshold: 0
			})
		},
		"left-of-screen": function(b) {
			return !a.rightoffold(b, {
				threshold: 0
			})
		},
		"in-viewport": function(b) {
			return a.inviewport(b, {
				threshold: 0
			})
		},
		"above-the-fold": function(b) {
			return !a.belowthefold(b, {
				threshold: 0
			})
		},
		"right-of-fold": function(b) {
			return a.rightoffold(b, {
				threshold: 0
			})
		},
		"left-of-fold": function(b) {
			return !a.rightoffold(b, {
				threshold: 0
			})
		}
	})
}(jQuery, window, document);
(function(r) {
	r.fn.qrcode = function(h) {
		var s;

		function u(a) {
			this.mode = s;
			this.data = a
		}
		function o(a, c) {
			this.typeNumber = a;
			this.errorCorrectLevel = c;
			this.modules = null;
			this.moduleCount = 0;
			this.dataCache = null;
			this.dataList = []
		}
		function q(a, c) {
			if (void 0 == a.length) throw Error(a.length + "/" + c);
			for (var d = 0; d < a.length && 0 == a[d];) d++;
			this.num = Array(a.length - d + c);
			for (var b = 0; b < a.length - d; b++) this.num[b] = a[b + d]
		}
		function p(a, c) {
			this.totalCount = a;
			this.dataCount = c
		}
		function t() {
			this.buffer = [];
			this.length = 0
		}
		u.prototype = {
			getLength: function() {
				return this.data.length
			},
			write: function(a) {
				for (var c = 0; c < this.data.length; c++) a.put(this.data.charCodeAt(c), 8)
			}
		};
		o.prototype = {
			addData: function(a) {
				this.dataList.push(new u(a));
				this.dataCache = null
			},
			isDark: function(a, c) {
				if (0 > a || this.moduleCount <= a || 0 > c || this.moduleCount <= c) throw Error(a + "," + c);
				return this.modules[a][c]
			},
			getModuleCount: function() {
				return this.moduleCount
			},
			make: function() {
				if (1 > this.typeNumber) {
					for (var a = 1, a = 1; 40 > a; a++) {
						for (var c = p.getRSBlocks(a, this.errorCorrectLevel), d = new t, b = 0, e = 0; e < c.length; e++) b += c[e].dataCount;
						for (e = 0; e < this.dataList.length; e++) c = this.dataList[e], d.put(c.mode, 4), d.put(c.getLength(), j.getLengthInBits(c.mode, a)), c.write(d);
						if (d.getLengthInBits() <= 8 * b) break
					}
					this.typeNumber = a
				}
				this.makeImpl(!1, this.getBestMaskPattern())
			},
			makeImpl: function(a, c) {
				this.moduleCount = 4 * this.typeNumber + 17;
				this.modules = Array(this.moduleCount);
				for (var d = 0; d < this.moduleCount; d++) {
					this.modules[d] = Array(this.moduleCount);
					for (var b = 0; b < this.moduleCount; b++) this.modules[d][b] = null
				}
				this.setupPositionProbePattern(0, 0);
				this.setupPositionProbePattern(this.moduleCount - 7, 0);
				this.setupPositionProbePattern(0, this.moduleCount - 7);
				this.setupPositionAdjustPattern();
				this.setupTimingPattern();
				this.setupTypeInfo(a, c);
				7 <= this.typeNumber && this.setupTypeNumber(a);
				null == this.dataCache && (this.dataCache = o.createData(this.typeNumber, this.errorCorrectLevel, this.dataList));
				this.mapData(this.dataCache, c)
			},
			setupPositionProbePattern: function(a, c) {
				for (var d = -1; 7 >= d; d++) if (!(-1 >= a + d || this.moduleCount <= a + d)) for (var b = -1; 7 >= b; b++) - 1 >= c + b || this.moduleCount <= c + b || (this.modules[a + d][c + b] = 0 <= d && 6 >= d && (0 == b || 6 == b) || 0 <= b && 6 >= b && (0 == d || 6 == d) || 2 <= d && 4 >= d && 2 <= b && 4 >= b ? !0 : !1)
			},
			getBestMaskPattern: function() {
				for (var a = 0, c = 0, d = 0; 8 > d; d++) {
					this.makeImpl(!0, d);
					var b = j.getLostPoint(this);
					if (0 == d || a > b) a = b, c = d
				}
				return c
			},
			createMovieClip: function(a, c, d) {
				a = a.createEmptyMovieClip(c, d);
				this.make();
				for (c = 0; c < this.modules.length; c++) for (var d = 1 * c, b = 0; b < this.modules[c].length; b++) {
					var e = 1 * b;
					this.modules[c][b] && (a.beginFill(0, 100), a.moveTo(e, d), a.lineTo(e + 1, d), a.lineTo(e + 1, d + 1), a.lineTo(e, d + 1), a.endFill())
				}
				return a
			},
			setupTimingPattern: function() {
				for (var a = 8; a < this.moduleCount - 8; a++) null == this.modules[a][6] && (this.modules[a][6] = 0 == a % 2);
				for (a = 8; a < this.moduleCount - 8; a++) null == this.modules[6][a] && (this.modules[6][a] = 0 == a % 2)
			},
			setupPositionAdjustPattern: function() {
				for (var a = j.getPatternPosition(this.typeNumber), c = 0; c < a.length; c++) for (var d = 0; d < a.length; d++) {
					var b = a[c],
						e = a[d];
					if (null == this.modules[b][e]) for (var f = -2; 2 >= f; f++) for (var i = -2; 2 >= i; i++) this.modules[b + f][e + i] = -2 == f || 2 == f || -2 == i || 2 == i || 0 == f && 0 == i ? !0 : !1
				}
			},
			setupTypeNumber: function(a) {
				for (var c = j.getBCHTypeNumber(this.typeNumber), d = 0; 18 > d; d++) {
					var b = !a && 1 == (c >> d & 1);
					this.modules[Math.floor(d / 3)][d % 3 + this.moduleCount - 8 - 3] = b
				}
				for (d = 0; 18 > d; d++) b = !a && 1 == (c >> d & 1), this.modules[d % 3 + this.moduleCount - 8 - 3][Math.floor(d / 3)] = b
			},
			setupTypeInfo: function(a, c) {
				for (var d = j.getBCHTypeInfo(this.errorCorrectLevel << 3 | c), b = 0; 15 > b; b++) {
					var e = !a && 1 == (d >> b & 1);
					6 > b ? this.modules[b][8] = e : 8 > b ? this.modules[b + 1][8] = e : this.modules[this.moduleCount - 15 + b][8] = e
				}
				for (b = 0; 15 > b; b++) e = !a && 1 == (d >> b & 1), 8 > b ? this.modules[8][this.moduleCount - b - 1] = e : 9 > b ? this.modules[8][15 - b - 1 + 1] = e : this.modules[8][15 - b - 1] = e;
				this.modules[this.moduleCount - 8][8] = !a
			},
			mapData: function(a, c) {
				for (var d = -1, b = this.moduleCount - 1, e = 7, f = 0, i = this.moduleCount - 1; 0 < i; i -= 2) for (6 == i && i--;;) {
					for (var g = 0; 2 > g; g++) if (null == this.modules[b][i - g]) {
						var n = !1;
						f < a.length && (n = 1 == (a[f] >>> e & 1));
						j.getMask(c, b, i - g) && (n = !n);
						this.modules[b][i - g] = n;
						e--; - 1 == e && (f++, e = 7)
					}
					b += d;
					if (0 > b || this.moduleCount <= b) {
						b -= d;
						d = -d;
						break
					}
				}
			}
		};
		o.PAD0 = 236;
		o.PAD1 = 17;
		o.createData = function(a, c, d) {
			for (var c = p.getRSBlocks(a, c), b = new t, e = 0; e < d.length; e++) {
				var f = d[e];
				b.put(f.mode, 4);
				b.put(f.getLength(), j.getLengthInBits(f.mode, a));
				f.write(b)
			}
			for (e = a = 0; e < c.length; e++) a += c[e].dataCount;
			if (b.getLengthInBits() > 8 * a) throw Error("code length overflow. (" + b.getLengthInBits() + ">" + 8 * a + ")");
			for (b.getLengthInBits() + 4 <= 8 * a && b.put(0, 4); 0 != b.getLengthInBits() % 8;) b.putBit(!1);
			for (; !(b.getLengthInBits() >= 8 * a);) {
				b.put(o.PAD0, 8);
				if (b.getLengthInBits() >= 8 * a) break;
				b.put(o.PAD1, 8)
			}
			return o.createBytes(b, c)
		};
		o.createBytes = function(a, c) {
			for (var d = 0, b = 0, e = 0, f = Array(c.length), i = Array(c.length), g = 0; g < c.length; g++) {
				var n = c[g].dataCount,
					h = c[g].totalCount - n,
					b = Math.max(b, n),
					e = Math.max(e, h);
				f[g] = Array(n);
				for (var k = 0; k < f[g].length; k++) f[g][k] = 255 & a.buffer[k + d];
				d += n;
				k = j.getErrorCorrectPolynomial(h);
				n = (new q(f[g], k.getLength() - 1)).mod(k);
				i[g] = Array(k.getLength() - 1);
				for (k = 0; k < i[g].length; k++) h = k + n.getLength() - i[g].length, i[g][k] = 0 <= h ? n.get(h) : 0
			}
			for (k = g = 0; k < c.length; k++) g += c[k].totalCount;
			d = Array(g);
			for (k = n = 0; k < b; k++) for (g = 0; g < c.length; g++) k < f[g].length && (d[n++] = f[g][k]);
			for (k = 0; k < e; k++) for (g = 0; g < c.length; g++) k < i[g].length && (d[n++] = i[g][k]);
			return d
		};
		s = 4;
		for (var j = {
			PATTERN_POSITION_TABLE: [
				[],
				[6, 18],
				[6, 22],
				[6, 26],
				[6, 30],
				[6, 34],
				[6, 22, 38],
				[6, 24, 42],
				[6, 26, 46],
				[6, 28, 50],
				[6, 30, 54],
				[6, 32, 58],
				[6, 34, 62],
				[6, 26, 46, 66],
				[6, 26, 48, 70],
				[6, 26, 50, 74],
				[6, 30, 54, 78],
				[6, 30, 56, 82],
				[6, 30, 58, 86],
				[6, 34, 62, 90],
				[6, 28, 50, 72, 94],
				[6, 26, 50, 74, 98],
				[6, 30, 54, 78, 102],
				[6, 28, 54, 80, 106],
				[6, 32, 58, 84, 110],
				[6, 30, 58, 86, 114],
				[6, 34, 62, 90, 118],
				[6, 26, 50, 74, 98, 122],
				[6, 30, 54, 78, 102, 126],
				[6, 26, 52, 78, 104, 130],
				[6, 30, 56, 82, 108, 134],
				[6, 34, 60, 86, 112, 138],
				[6, 30, 58, 86, 114, 142],
				[6, 34, 62, 90, 118, 146],
				[6, 30, 54, 78, 102, 126, 150],
				[6, 24, 50, 76, 102, 128, 154],
				[6, 28, 54, 80, 106, 132, 158],
				[6, 32, 58, 84, 110, 136, 162],
				[6, 26, 54, 82, 110, 138, 166],
				[6, 30, 58, 86, 114, 142, 170]
			],
			G15: 1335,
			G18: 7973,
			G15_MASK: 21522,
			getBCHTypeInfo: function(a) {
				for (var c = a << 10; 0 <= j.getBCHDigit(c) - j.getBCHDigit(j.G15);) c ^= j.G15 << j.getBCHDigit(c) - j.getBCHDigit(j.G15);
				return (a << 10 | c) ^ j.G15_MASK
			},
			getBCHTypeNumber: function(a) {
				for (var c = a << 12; 0 <= j.getBCHDigit(c) - j.getBCHDigit(j.G18);) c ^= j.G18 << j.getBCHDigit(c) - j.getBCHDigit(j.G18);
				return a << 12 | c
			},
			getBCHDigit: function(a) {
				for (var c = 0; 0 != a;) c++, a >>>= 1;
				return c
			},
			getPatternPosition: function(a) {
				return j.PATTERN_POSITION_TABLE[a - 1]
			},
			getMask: function(a, c, d) {
				switch (a) {
				case 0:
					return 0 == (c + d) % 2;
				case 1:
					return 0 == c % 2;
				case 2:
					return 0 == d % 3;
				case 3:
					return 0 == (c + d) % 3;
				case 4:
					return 0 == (Math.floor(c / 2) + Math.floor(d / 3)) % 2;
				case 5:
					return 0 == c * d % 2 + c * d % 3;
				case 6:
					return 0 == (c * d % 2 + c * d % 3) % 2;
				case 7:
					return 0 == (c * d % 3 + (c + d) % 2) % 2;
				default:
					throw Error("bad maskPattern:" + a);
				}
			},
			getErrorCorrectPolynomial: function(a) {
				for (var c = new q([1], 0), d = 0; d < a; d++) c = c.multiply(new q([1, l.gexp(d)], 0));
				return c
			},
			getLengthInBits: function(a, c) {
				if (1 <= c && 10 > c) switch (a) {
				case 1:
					return 10;
				case 2:
					return 9;
				case s:
					return 8;
				case 8:
					return 8;
				default:
					throw Error("mode:" + a);
				} else if (27 > c) switch (a) {
				case 1:
					return 12;
				case 2:
					return 11;
				case s:
					return 16;
				case 8:
					return 10;
				default:
					throw Error("mode:" + a);
				} else if (41 > c) switch (a) {
				case 1:
					return 14;
				case 2:
					return 13;
				case s:
					return 16;
				case 8:
					return 12;
				default:
					throw Error("mode:" + a);
				} else throw Error("type:" + c);
			},
			getLostPoint: function(a) {
				for (var c = a.getModuleCount(), d = 0, b = 0; b < c; b++) for (var e = 0; e < c; e++) {
					for (var f = 0, i = a.isDark(b, e), g = -1; 1 >= g; g++) if (!(0 > b + g || c <= b + g)) for (var h = -1; 1 >= h; h++) 0 > e + h || c <= e + h || 0 == g && 0 == h || i == a.isDark(b + g, e + h) && f++;
					5 < f && (d += 3 + f - 5)
				}
				for (b = 0; b < c - 1; b++) for (e = 0; e < c - 1; e++) if (f = 0, a.isDark(b, e) && f++, a.isDark(b + 1, e) && f++, a.isDark(b, e + 1) && f++, a.isDark(b + 1, e + 1) && f++, 0 == f || 4 == f) d += 3;
				for (b = 0; b < c; b++) for (e = 0; e < c - 6; e++) a.isDark(b, e) && !a.isDark(b, e + 1) && a.isDark(b, e + 2) && a.isDark(b, e + 3) && a.isDark(b, e + 4) && !a.isDark(b, e + 5) && a.isDark(b, e + 6) && (d += 40);
				for (e = 0; e < c; e++) for (b = 0; b < c - 6; b++) a.isDark(b, e) && !a.isDark(b + 1, e) && a.isDark(b + 2, e) && a.isDark(b + 3, e) && a.isDark(b + 4, e) && !a.isDark(b + 5, e) && a.isDark(b + 6, e) && (d += 40);
				for (e = f = 0; e < c; e++) for (b = 0; b < c; b++) a.isDark(b, e) && f++;
				a = Math.abs(100 * f / c / c - 50) / 5;
				return d + 10 * a
			}
		}, l = {
			glog: function(a) {
				if (1 > a) throw Error("glog(" + a + ")");
				return l.LOG_TABLE[a]
			},
			gexp: function(a) {
				for (; 0 > a;) a += 255;
				for (; 256 <= a;) a -= 255;
				return l.EXP_TABLE[a]
			},
			EXP_TABLE: Array(256),
			LOG_TABLE: Array(256)
		}, m = 0; 8 > m; m++) l.EXP_TABLE[m] = 1 << m;
		for (m = 8; 256 > m; m++) l.EXP_TABLE[m] = l.EXP_TABLE[m - 4] ^ l.EXP_TABLE[m - 5] ^ l.EXP_TABLE[m - 6] ^ l.EXP_TABLE[m - 8];
		for (m = 0; 255 > m; m++) l.LOG_TABLE[l.EXP_TABLE[m]] = m;
		q.prototype = {
			get: function(a) {
				return this.num[a]
			},
			getLength: function() {
				return this.num.length
			},
			multiply: function(a) {
				for (var c = Array(this.getLength() + a.getLength() - 1), d = 0; d < this.getLength(); d++) for (var b = 0; b < a.getLength(); b++) c[d + b] ^= l.gexp(l.glog(this.get(d)) + l.glog(a.get(b)));
				return new q(c, 0)
			},
			mod: function(a) {
				if (0 > this.getLength() - a.getLength()) return this;
				for (var c = l.glog(this.get(0)) - l.glog(a.get(0)), d = Array(this.getLength()), b = 0; b < this.getLength(); b++) d[b] = this.get(b);
				for (b = 0; b < a.getLength(); b++) d[b] ^= l.gexp(l.glog(a.get(b)) + c);
				return (new q(d, 0)).mod(a)
			}
		};
		p.RS_BLOCK_TABLE = [
			[1, 26, 19],
			[1, 26, 16],
			[1, 26, 13],
			[1, 26, 9],
			[1, 44, 34],
			[1, 44, 28],
			[1, 44, 22],
			[1, 44, 16],
			[1, 70, 55],
			[1, 70, 44],
			[2, 35, 17],
			[2, 35, 13],
			[1, 100, 80],
			[2, 50, 32],
			[2, 50, 24],
			[4, 25, 9],
			[1, 134, 108],
			[2, 67, 43],
			[2, 33, 15, 2, 34, 16],
			[2, 33, 11, 2, 34, 12],
			[2, 86, 68],
			[4, 43, 27],
			[4, 43, 19],
			[4, 43, 15],
			[2, 98, 78],
			[4, 49, 31],
			[2, 32, 14, 4, 33, 15],
			[4, 39, 13, 1, 40, 14],
			[2, 121, 97],
			[2, 60, 38, 2, 61, 39],
			[4, 40, 18, 2, 41, 19],
			[4, 40, 14, 2, 41, 15],
			[2, 146, 116],
			[3, 58, 36, 2, 59, 37],
			[4, 36, 16, 4, 37, 17],
			[4, 36, 12, 4, 37, 13],
			[2, 86, 68, 2, 87, 69],
			[4, 69, 43, 1, 70, 44],
			[6, 43, 19, 2, 44, 20],
			[6, 43, 15, 2, 44, 16],
			[4, 101, 81],
			[1, 80, 50, 4, 81, 51],
			[4, 50, 22, 4, 51, 23],
			[3, 36, 12, 8, 37, 13],
			[2, 116, 92, 2, 117, 93],
			[6, 58, 36, 2, 59, 37],
			[4, 46, 20, 6, 47, 21],
			[7, 42, 14, 4, 43, 15],
			[4, 133, 107],
			[8, 59, 37, 1, 60, 38],
			[8, 44, 20, 4, 45, 21],
			[12, 33, 11, 4, 34, 12],
			[3, 145, 115, 1, 146, 116],
			[4, 64, 40, 5, 65, 41],
			[11, 36, 16, 5, 37, 17],
			[11, 36, 12, 5, 37, 13],
			[5, 109, 87, 1, 110, 88],
			[5, 65, 41, 5, 66, 42],
			[5, 54, 24, 7, 55, 25],
			[11, 36, 12],
			[5, 122, 98, 1, 123, 99],
			[7, 73, 45, 3, 74, 46],
			[15, 43, 19, 2, 44, 20],
			[3, 45, 15, 13, 46, 16],
			[1, 135, 107, 5, 136, 108],
			[10, 74, 46, 1, 75, 47],
			[1, 50, 22, 15, 51, 23],
			[2, 42, 14, 17, 43, 15],
			[5, 150, 120, 1, 151, 121],
			[9, 69, 43, 4, 70, 44],
			[17, 50, 22, 1, 51, 23],
			[2, 42, 14, 19, 43, 15],
			[3, 141, 113, 4, 142, 114],
			[3, 70, 44, 11, 71, 45],
			[17, 47, 21, 4, 48, 22],
			[9, 39, 13, 16, 40, 14],
			[3, 135, 107, 5, 136, 108],
			[3, 67, 41, 13, 68, 42],
			[15, 54, 24, 5, 55, 25],
			[15, 43, 15, 10, 44, 16],
			[4, 144, 116, 4, 145, 117],
			[17, 68, 42],
			[17, 50, 22, 6, 51, 23],
			[19, 46, 16, 6, 47, 17],
			[2, 139, 111, 7, 140, 112],
			[17, 74, 46],
			[7, 54, 24, 16, 55, 25],
			[34, 37, 13],
			[4, 151, 121, 5, 152, 122],
			[4, 75, 47, 14, 76, 48],
			[11, 54, 24, 14, 55, 25],
			[16, 45, 15, 14, 46, 16],
			[6, 147, 117, 4, 148, 118],
			[6, 73, 45, 14, 74, 46],
			[11, 54, 24, 16, 55, 25],
			[30, 46, 16, 2, 47, 17],
			[8, 132, 106, 4, 133, 107],
			[8, 75, 47, 13, 76, 48],
			[7, 54, 24, 22, 55, 25],
			[22, 45, 15, 13, 46, 16],
			[10, 142, 114, 2, 143, 115],
			[19, 74, 46, 4, 75, 47],
			[28, 50, 22, 6, 51, 23],
			[33, 46, 16, 4, 47, 17],
			[8, 152, 122, 4, 153, 123],
			[22, 73, 45, 3, 74, 46],
			[8, 53, 23, 26, 54, 24],
			[12, 45, 15, 28, 46, 16],
			[3, 147, 117, 10, 148, 118],
			[3, 73, 45, 23, 74, 46],
			[4, 54, 24, 31, 55, 25],
			[11, 45, 15, 31, 46, 16],
			[7, 146, 116, 7, 147, 117],
			[21, 73, 45, 7, 74, 46],
			[1, 53, 23, 37, 54, 24],
			[19, 45, 15, 26, 46, 16],
			[5, 145, 115, 10, 146, 116],
			[19, 75, 47, 10, 76, 48],
			[15, 54, 24, 25, 55, 25],
			[23, 45, 15, 25, 46, 16],
			[13, 145, 115, 3, 146, 116],
			[2, 74, 46, 29, 75, 47],
			[42, 54, 24, 1, 55, 25],
			[23, 45, 15, 28, 46, 16],
			[17, 145, 115],
			[10, 74, 46, 23, 75, 47],
			[10, 54, 24, 35, 55, 25],
			[19, 45, 15, 35, 46, 16],
			[17, 145, 115, 1, 146, 116],
			[14, 74, 46, 21, 75, 47],
			[29, 54, 24, 19, 55, 25],
			[11, 45, 15, 46, 46, 16],
			[13, 145, 115, 6, 146, 116],
			[14, 74, 46, 23, 75, 47],
			[44, 54, 24, 7, 55, 25],
			[59, 46, 16, 1, 47, 17],
			[12, 151, 121, 7, 152, 122],
			[12, 75, 47, 26, 76, 48],
			[39, 54, 24, 14, 55, 25],
			[22, 45, 15, 41, 46, 16],
			[6, 151, 121, 14, 152, 122],
			[6, 75, 47, 34, 76, 48],
			[46, 54, 24, 10, 55, 25],
			[2, 45, 15, 64, 46, 16],
			[17, 152, 122, 4, 153, 123],
			[29, 74, 46, 14, 75, 47],
			[49, 54, 24, 10, 55, 25],
			[24, 45, 15, 46, 46, 16],
			[4, 152, 122, 18, 153, 123],
			[13, 74, 46, 32, 75, 47],
			[48, 54, 24, 14, 55, 25],
			[42, 45, 15, 32, 46, 16],
			[20, 147, 117, 4, 148, 118],
			[40, 75, 47, 7, 76, 48],
			[43, 54, 24, 22, 55, 25],
			[10, 45, 15, 67, 46, 16],
			[19, 148, 118, 6, 149, 119],
			[18, 75, 47, 31, 76, 48],
			[34, 54, 24, 34, 55, 25],
			[20, 45, 15, 61, 46, 16]
		];
		p.getRSBlocks = function(a, c) {
			var d = p.getRsBlockTable(a, c);
			if (void 0 == d) throw Error("bad rs block @ typeNumber:" + a + "/errorCorrectLevel:" + c);
			for (var b = d.length / 3, e = [], f = 0; f < b; f++) for (var h = d[3 * f + 0], g = d[3 * f + 1], j = d[3 * f + 2], l = 0; l < h; l++) e.push(new p(g, j));
			return e
		};
		p.getRsBlockTable = function(a, c) {
			switch (c) {
			case 1:
				return p.RS_BLOCK_TABLE[4 * (a - 1) + 0];
			case 0:
				return p.RS_BLOCK_TABLE[4 * (a - 1) + 1];
			case 3:
				return p.RS_BLOCK_TABLE[4 * (a - 1) + 2];
			case 2:
				return p.RS_BLOCK_TABLE[4 * (a - 1) + 3]
			}
		};
		t.prototype = {
			get: function(a) {
				return 1 == (this.buffer[Math.floor(a / 8)] >>> 7 - a % 8 & 1)
			},
			put: function(a, c) {
				for (var d = 0; d < c; d++) this.putBit(1 == (a >>> c - d - 1 & 1))
			},
			getLengthInBits: function() {
				return this.length
			},
			putBit: function(a) {
				var c = Math.floor(this.length / 8);
				this.buffer.length <= c && this.buffer.push(0);
				a && (this.buffer[c] |= 128 >>> this.length % 8);
				this.length++
			}
		};
		"string" === typeof h && (h = {
			text: h
		});
		h = r.extend({}, {
			render: "canvas",
			width: 256,
			height: 256,
			typeNumber: -1,
			correctLevel: 2,
			background: "#ffffff",
			foreground: "#000000"
		}, h);
		return this.each(function() {
			var a;
			if ("canvas" == h.render) {
				a = new o(h.typeNumber, h.correctLevel);
				a.addData(h.text);
				a.make();
				var c = document.createElement("canvas");
				c.width = h.width;
				c.height = h.height;
				for (var d = c.getContext("2d"), b = h.width / a.getModuleCount(), e = h.height / a.getModuleCount(), f = 0; f < a.getModuleCount(); f++) for (var i = 0; i < a.getModuleCount(); i++) {
					d.fillStyle = a.isDark(f, i) ? h.foreground : h.background;
					var g = Math.ceil((i + 1) * b) - Math.floor(i * b),
						j = Math.ceil((f + 1) * b) - Math.floor(f * b);
					d.fillRect(Math.round(i * b), Math.round(f * e), g, j)
				}
			} else {
				a = new o(h.typeNumber, h.correctLevel);
				a.addData(h.text);
				a.make();
				c = r("<table></table>").css("width", h.width + "px").css("height", h.height + "px").css("border", "0px").css("border-collapse", "collapse").css("background-color", h.background);
				d = h.width / a.getModuleCount();
				b = h.height / a.getModuleCount();
				for (e = 0; e < a.getModuleCount(); e++) {
					f = r("<tr></tr>").css("height", b + "px").appendTo(c);
					for (i = 0; i < a.getModuleCount(); i++) r("<td></td>").css("width", d + "px").css("background-color", a.isDark(e, i) ? h.foreground : h.background).appendTo(f)
				}
			}
			a = c;
			jQuery(a).appendTo(this)
		})
	}
})(jQuery);