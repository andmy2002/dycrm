
String.prototype.replaceAll = function(s1, s2) {
	return this.replace(new RegExp(s1, "gm"), s2);
}
String.prototype.trim = function() {
	return this.replace(/(^\s*)|(\s*$)/g, "");
}
var base64EncodeChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
var base64DecodeChars = new Array(-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1, -1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1);

function base64encode(str) {
	var out, i, len;
	var c1, c2, c3;
	len = str.length;
	i = 0;
	out = "";
	while (i < len) {
		c1 = str.charCodeAt(i++) & 0xff;
		if (i == len) {
			out += base64EncodeChars.charAt(c1 >> 2);
			out += base64EncodeChars.charAt((c1 & 0x3) << 4);
			out += "==";
			break
		}
		c2 = str.charCodeAt(i++);
		if (i == len) {
			out += base64EncodeChars.charAt(c1 >> 2);
			out += base64EncodeChars.charAt(((c1 & 0x3) << 4) | ((c2 & 0xF0) >> 4));
			out += base64EncodeChars.charAt((c2 & 0xF) << 2);
			out += "=";
			break
		}
		c3 = str.charCodeAt(i++);
		out += base64EncodeChars.charAt(c1 >> 2);
		out += base64EncodeChars.charAt(((c1 & 0x3) << 4) | ((c2 & 0xF0) >> 4));
		out += base64EncodeChars.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >> 6));
		out += base64EncodeChars.charAt(c3 & 0x3F)
	}
	return out
}
function base64decode(str) {
	var c1, c2, c3, c4;
	var i, len, out;
	len = str.length;
	i = 0;
	out = "";
	while (i < len) {
		do {
			c1 = base64DecodeChars[str.charCodeAt(i++) & 0xff]
		} while (i < len && c1 == -1);
		if (c1 == -1) break;
		do {
			c2 = base64DecodeChars[str.charCodeAt(i++) & 0xff]
		} while (i < len && c2 == -1);
		if (c2 == -1) break;
		out += String.fromCharCode((c1 << 2) | ((c2 & 0x30) >> 4));
		do {
			c3 = str.charCodeAt(i++) & 0xff;
			if (c3 == 61) return out;
			c3 = base64DecodeChars[c3]
		} while (i < len && c3 == -1);
		if (c3 == -1) break;
		out += String.fromCharCode(((c2 & 0XF) << 4) | ((c3 & 0x3C) >> 2));
		do {
			c4 = str.charCodeAt(i++) & 0xff;
			if (c4 == 61) return out;
			c4 = base64DecodeChars[c4]
		} while (i < len && c4 == -1);
		if (c4 == -1) break;
		out += String.fromCharCode(((c3 & 0x03) << 6) | c4)
	}
	return out
}
function utf16to8(str) {
	var out, i, len, c;
	out = "";
	len = str.length;
	for (i = 0; i < len; i++) {
		c = str.charCodeAt(i);
		if ((c >= 0x0001) && (c <= 0x007F)) {
			out += str.charAt(i)
		} else if (c > 0x07FF) {
			out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));
			out += String.fromCharCode(0x80 | ((c >> 6) & 0x3F));
			out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F))
		} else {
			out += String.fromCharCode(0xC0 | ((c >> 6) & 0x1F));
			out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F))
		}
	}
	return out
}
function utf8to16(str) {
	var out, i, len, c;
	var char2, char3;
	out = "";
	len = str.length;
	i = 0;
	while (i < len) {
		c = str.charCodeAt(i++);
		switch (c >> 4) {
		case 0:
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
		case 6:
		case 7:
			out += str.charAt(i - 1);
			break;
		case 12:
		case 13:
			char2 = str.charCodeAt(i++);
			out += String.fromCharCode(((c & 0x1F) << 6) | (char2 & 0x3F));
			break;
		case 14:
			char2 = str.charCodeAt(i++);
			char3 = str.charCodeAt(i++);
			out += String.fromCharCode(((c & 0x0F) << 12) | ((char2 & 0x3F) << 6) | ((char3 & 0x3F) << 0));
			break
		}
	}
	return out
}

var FFCMS = {
	'Url': document.URL,
	'Title': document.title,
	'UserAgent': function() {
		var ua = navigator.userAgent; //navigator.appVersion
		return {
			'mobile': !! ua.match(/AppleWebKit.*Mobile.*/),
			//是否为移动终端
			'ios': !! ua.match(/\(i[^;]+;( U;)? CPU.+Feifei OS X/),
			//ios终端
			'android': ua.indexOf('Android') > -1 || ua.indexOf('Linux') > -1,
			//android终端或者uc浏览器
			'iPhone': ua.indexOf('iPhone') > -1 || ua.indexOf('Feifei') > -1,
			//是否为iPhone或者QQHD浏览器
			'iPad': ua.indexOf('iPad') > -1,
			//是否iPad
			'trident': ua.indexOf('Trident') > -1,
			//IE内核
			'presto': ua.indexOf('Presto') > -1,
			//opera内核
			'webKit': ua.indexOf('AppleWebKit') > -1,
			//苹果、谷歌内核
			'gecko': ua.indexOf('Gecko') > -1 && ua.indexOf('KHTML') == -1,
			//火狐内核
			'weixin': ua.indexOf('MicroMessenger') > -1 //是否微信 ua.match(/MicroMessenger/i) == "micromessenger",
		};
	}(),
	'Copy': function(s) {
		if (window.clipboardData) {
			window.clipboardData.setData("Text", s);
		} else {
			if ($("#ffcms_flash_copy").get(0) == undefined) {
				$('<div id="ffcms_flash_copy"></div>');
			} else {
				$('#ffcms_flash_copy').html('');
			}
			$('#ffcms_flash_copy').html('<embed src=' + feifeicms.path + '"images/_clipboard.swf" FlashVars="clipboard=' + escape(s) + '" width="0" height="0" type="application/x-shockwave-flash"></embed>');
		}
		FFCMS.Pop.Msg(100, 20, '复制成功', 1000);
	},
	'Home': function(o, u) {
		try {
			o.style.behavior = 'url(#default#homepage)';
			o.setHomePage(u);
		} catch (e) {
			if (window.netscape) {
				try {
					netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
				} catch (e) {
					FFCMS.Pop.Msg(150, 40, '此操作被浏览器拒绝！请手动设置', 1000);
				}
				var moz = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
				moz.setCharPref('browser.startup.homepage', u);
			}
		}
	},
	'Fav': function(u, s) {
		try {
			window.external.addFavorite(u, s);
		} catch (e) {
			try {
				window.sidebar.addPanel(s, u, "");
			} catch (e) {
				FFCMS.Pop.Msg(150, 40, '加入收藏出错，请使用键盘Ctrl+D进行添加', 1000);
			}
		}
	},
	'Open': function(u, w, h) {
		window.open(u, 'feifeicmsopen1', 'toolbars=0, scrollbars=0, location=0, statusbars=0,menubars=0,resizable=yes,width=' + w + ',height=' + h + '');
	},
	'Cookie': {
		'Set': function(name, value, days) {
			var exp = new Date();
			exp.setTime(exp.getTime() + days * 24 * 60 * 60 * 1000);
			var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
			document.cookie = name + "=" + encodeURIComponent(value) + ";path=/;expires=" + exp.toUTCString();
		},
		'Get': function(name) {
			var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
			if (arr != null) {
				return decodeURIComponent(arr[2]);
				return null;
			}
		},
		'Del': function(name) {
			var exp = new Date();
			exp.setTime(exp.getTime() - 1);
			var cval = this.Get(name);
			if (cval != null) {
				document.cookie = name + "=" + encodeURIComponent(cval) + ";path=/;expires=" + exp.toUTCString();
			}
		}
	},
	'GoBack': function() {
		var ldghost = document.domain;
		if (document.referrer.indexOf(ldghost) > 0) {
			history.back();
		} else {
			window.location = "//" + ldghost;
		}
	},
	'Adaptive': function() {
		if (feifeicms.mob_status == '1' && feifeicms.url != feifeicms.wapurl) {
			if (document.domain == feifeicms.url && FFCMS.UserAgent.mobile) {
				location.href = location.href.replace(feifeicms.url, feifeicms.wapurl);
			} else if (document.domain == feifeicms.wapurl && !FFCMS.UserAgent.mobile) {
				location.href = location.href.replace(feifeicms.wapurl, feifeicms.url);
			}
		}
	},
	'CheckBox': {
		'All': function(n) {
			$("input[name='" + n + "']").each(function() {
				this.checked = true;
			});
		},
		'Other': function(n) {
			$("input[name='" + n + "']").each(function() {
				this.checked = !this.checked;
			});
		},
		'Count': function(n) {
			var res = 0;
			$("input[name='" + n + "']").each(function() {
				if (this.checked) {
					res++;
				}
			});
			return res;
		},
		'Ids': function(n) {
			var res = [];
			$("input[name='" + n + "']").each(function() {
				if (this.checked) {
					res.push(this.value);
				}
			});
			return res.join(",");
		}
	},
	'Ajax': function(url, type, dataType, data, sfun, efun, cfun) {
		type = type || 'get';
		dataType = dataType || 'json';
		data = data || '';
		efun = efun || '';
		cfun = cfun || '';

		$.ajax({
			url: url,
			type: type,
			dataType: dataType,
			data: data,
			timeout: 5000,
			beforeSend: function(XHR) {

			},
			error: function(XHR, textStatus, errorThrown) {
				if (efun) efun(XHR, textStatus, errorThrown);
			},
			success: function(data) {
				sfun(data);
			},
			complete: function(XHR, TS) {
				if (cfun) cfun(XHR, TS);
			}
		})
	},
	'Qrcode': {
		'Init': function() {
			$('.ffcms_qrcode').attr('src', '//api.feifeicms.top/qrcode/?w=150&h=150&url=' + FFCMS.Url);
		}
	},
	'Shorten': {
		'Init': function() {
			if ($('.ffcms_shorten').length == 0) {
				return;
			}
			FFCMS.Shorten.Get();
		},
		'Get': function(url, call) {
			url = url || location.href;
			FFCMS.Ajax('//api.feifeicms.top/shorten/?callback=callback&url=' + encodeURIComponent(url), 'get', 'jsonp', '', function(r) {
				if (r.code == 1) {
					if ($('.ffcms_shorten').length > 0) {
						$('.ffcms_shorten').val(r.data.url_short);
						$('.ffcms_shorten').html(r.data.url_short);
					}
					if (call) {
						call(r);
					}

				}
			});
		}
	},
	'Image': {
		'Lazyload': {
			'Show': function() {
				try {
					$("img.lazy").lazyload();
				} catch (e) {};
			},
			'Box': function($id) {
				$("img.lazy").lazyload({
					container: $("#" + $id)
				});
			}
		}
	},
	'Verify': {
		'Init': function() {
			FFCMS.Verify.Focus();
			FFCMS.Verify.Click();
		},
		'Focus': function() { //验证码框焦点
			$('body').on("focus", ".ffcms_verify", function() {
				$(this).removeClass('ffcms_verify').after(FFCMS.Verify.Show());
				$(this).unbind();
			});
		},
		'Click': function() { //点击刷新
			$('body').on('click', 'img.ffcms_verify_img', function() {
				$(this).attr('src', feifeicms.path + '/index.php/verify/index.html?r=' + Math.random());
			});
		},
		'Refresh': function() {
			$('.ffcms_verify_img').attr('src', feifeicms.path + '/index.php/verify/index.html?r=' + Math.random());
		},
		'Show': function() {
			return '<img class="ffcms_verify_img" src="' + feifeicms.path + '/index.php/verify/index.html?"  title="看不清楚? 换一张！">';
		}
	},
	'PageGo': {
		'Init': function() {
			$('.ffcms_page_go').click(function() {
				var that = $(this);
				var url = that.attr('data-url');
				var total = parseInt(that.attr('data-total'));
				var sp = that.attr('data-sp');
				var page = parseInt($('#page').val());

				if (page > 0 && (page <= total)) {
					url = url.replace(sp + 'PAGELINK', sp + page).replace('PAGELINK', page);
					location.href = url;
				}
				return false;
			});
		}
	},
	'Hits': {
		'Init': function() {
			if ($('.ffcms_hits').length == 0) {
				return;
			}
			var $that = $(".ffcms_hits");

			FFCMS.Ajax(feifeicms.path + '/index.php/ajax/hits?mid=' + $that.attr("data-mid") + '&id=' + $that.attr("data-id") + '&type=update', 'get', 'json', '', function(r) {
				if (r.code == 1) {
					$(".ffcms_hits").each(function(i) {
						$type = $(".ffcms_hits").eq(i).attr('data-type');
						if ($type != 'insert') {
							$('.' + $type).html(eval('(r.data.' + $type + ')'));
						}
					});
				}
			});

		}
	},
	'Score': {
		'Init': function() {
			if ($('.ffcms_score').length == 0) {
				return;
			}
			$('body').on('click', '.score_btn', function(e) {
				FFCMS.Score.Submit();
			});

			FFCMS.Ajax(feifeicms.path + '/index.php/ajax/score?mid=' + $('.ffcms_score').attr('data-mid') + '&id=' + $('.ffcms_score').attr('data-id'), 'post', 'json', '', function(r) {
				FFCMS.Score.View(r);
			}, function() {
				$(".ffcms_score").html('评分加载失败');
			});

		},
		'Submit': function() {
			var $s = $('.ffcms_score').find("input[name='score']").val();
			FFCMS.Ajax(feifeicms.path + '/index.php/ajax/score?mid=' + $('.ffcms_score').attr('data-mid') + '&id=' + $('.ffcms_score').attr('data-id') + '&score=' + $s, 'get', 'json', '', function(r) {
				FFCMS.Pop.Msg(100, 20, r.msg, 1000);
				if (r.code == 1) {
					FFCMS.Score.View(r);
				}
			});
		},
		'View': function(r) {
			$(".rating" + Math.floor(r.data.score)).attr('checked', true);
			$(".score_num").text(r.data.score_num);
			$(".score_all").text(r.data.score_all);
			$(".score_pjf").text(r.data.score);
		}
	},
	'Star': {
		'Init': function() {
			if ($('.ffcms_star').length == 0) {
				return;
			}

			$('.ffcms_star').raty({
				starType: 'i',
				number: 5,
				numberMax: 5,
				half: true,
				score: function() {
					return $(this).attr('data-score');
				},
				click: function(score, evt) {

					FFCMS.Ajax(feifeicms.path + '/index.php/ajax/score?mid=' + $('.ffcms_star').attr('data-mid') + '&id=' + $('.ffcms_star').attr('data-id') + '&score=' + (score * 2), 'get', 'json', '', function(r) {
						if (json.status == 1) {
							$('.star_tips').html(r.data.score);
						} else {
							$('.star_box').attr('title', r.msg);
						}
					}, function() {
						$('.star_box').attr('title', '网络异常！');
					});

				}
			});
		}
	},
	'Digg': {
		'Init': function() {
			$('body').on('click', '.digg_link', function(e) {
				var $that = $(this);
				if ($that.attr("data-id")) {

					FFCMS.Ajax(feifeicms.path + '/index.php/ajax/digg.html?mid=' + $that.attr("data-mid") + '&id=' + $that.attr("data-id") + '&type=' + $that.attr("data-type"), 'get', 'json', '', function(r) {
						$that.addClass('disabled');
						if (r.code == 1) {
							if ($that.attr("data-type") == 'up') {
								$that.find('.digg_num').html(r.data.up);
							} else {
								$that.find('.digg_num').html(r.data.down);
							}
						} else {
							$that.attr('title', r.msg);
						}
					});

				}
			});
		}
	},
	'Gbook': {
		'Login': 0,
		'Verify': 0,
		'Init': function() {
			$('body').on('keyup', '.gbook_content', function(e) {
				FFCMS.Remaining($(this), 200, '.gbook_remaining')
			});
			$('body').on('focus', '.gbook_content', function(e) {
				if (FFCMS.Gbook.Login == 1 && FFCMS.User.IsLogin != 1) {
					FFCMS.User.Login();
				}
			});
			$('body').on('click', '.gbook_submit', function(e) {
				FFCMS.Gbook.Submit();
			});
		},
		'Show': function($page) {
			FFCMS.Ajax(feifeicms.path + '/index.php/gbook/index?page=' + $page, 'post', 'json', '', function(r) {
				$(".ffcms_gbook_box").html(r);
			}, function() {
				$(".ffcms_gbook_box").html('留言加载失败，请刷新...');
			});
		},
		'Submit': function() {
			if ($(".gbook_content").val() == '') {
				FFCMS.Pop.Msg(100, 20, '请输入您的留言!', 1000);
				return false;
			}
			FFCMS.Ajax(feifeicms.path + '/index.php/gbook/saveData', 'post', 'json', $('.gbook_form').serialize(), function(r) {
				FFCMS.Pop.Msg(100, 20, r.msg, 1000);
				if (r.code == 1) {
					location.reload();
				} else {
					if (FFCMS.Gbook.Verify == 1) {
						FFCMS.Verify.Refresh();
					}
				}
			});
		},
		'Report': function(name, id) {
			FFCMS.Pop.Show(400, 300, '数据报错', feifeicms.path + '/index.php/gbook/report.html?id=' + id + '&name=' + encodeURIComponent(name), function(r) {

			});
		}
	},
	'Search': {
		'Init': function() {
			$('.ffcms_search').click(function() {
				var that = $(this);
				var url = that.attr('data-href') ? that.attr('data-href') : feifeicms.path + '/index.php/vod/search.html';
				location.href = url + '?wd=' + encodeURIComponent($("#wd").val());
			});
		},
		'Submit': function() {

			return false;
		}
	},
	'Suggest': {
		'Init': function($obj, $mid, $jumpurl) {
			try {
				$($obj).autocomplete(feifeicms.path + '/index.php/ajax/suggest?mid=' + $mid, {
					inputClass: "ffcms_input",
					resultsClass: "ffcms_results",
					loadingClass: "ffcms_loading",
					width: 175,
					scrollHeight: 300,
					minChars: 1,
					matchSubset: 0,
					cacheLength: 10,
					multiple: false,
					matchContains: true,
					autoFill: false,
					dataType: "json",
					parse: function(r) {
						if (r.code == 1) {
							var parsed = [];
							$.each(r['list'], function(index, row) {
								row.url = r.url;
								parsed[index] = {
									data: row
								};
							});
							return parsed;
						} else {
							return {
								data: ''
							};
						}
					},
					formatItem: function(row, i, max) {
						return row.name;
					},
					formatResult: function(row, i, max) {
						return row.text;
					}
				}).result(function(event, data, formatted) {
					$($obj).val(data.name);
					location.href = data.url.replace('ffcms_wd', encodeURIComponent(data.name));
				});
			} catch (e) {}
		}
	},
	'History': {
		'BoxShow': 0,
		'Limit': 10,
		'Days': 7,
		'Json': '',
		'Init': function() {
			if ($('.ffcms_history').length == 0) {
				return;
			}

			$('.ffcms_history').hover(function(e) {
				$('.ffcms_history_box').show();
			}, function() {
				$('.ffcms_history_box').hover(function() {
					FFCMS.History.BoxShow = 1;
				}, function() {
					FFCMS.History.BoxShow = 0;
					$('.ffcms_history_box').hide();
				});
			});

			var jsondata = [];
			if (this.Json) {
				jsondata = this.Json;
			} else {
				var jsonstr = FFCMS.Cookie.Get('ffcms_history');
				if (jsonstr != undefined) {
					jsondata = eval(jsonstr);
				}
			}

			html = '<dl class="ffcms_drop_box ffcms_history_box" style="display:none;">';
			html += '<dt style="border-radius:0 0 4px 4px;"><a target="_self" href="javascript:void(0)" onclick="FFCMS.History.Clear();">清空</a></dt>';

			if (jsondata.length > 0) {
				for ($i = 0; $i < jsondata.length; $i++) {
					if ($i % 2 == 1) {
						html += '<dd class="odd">';
					} else {
						html += '<dd class="even">';
					}
					html += '<a href="' + jsondata[$i].link + '" class="hx_title">' + jsondata[$i].name + '</a></dd>';
				}
			} else {
				html += '<dd class="hide">暂无浏览记录</dd>';
			}
			html += '</dl>';

			$('.ffcms_history').after(html);
			var h = $('.ffcms_history').height();
			var position = $('.ffcms_history').position();
			$('.ffcms_history_box').css({
				'left': position.left,
				'top': (position.top + h)
			});


			if ($(".ffcms_history_set").attr('data-name')) {
				var $that = $(".ffcms_history_set");
				FFCMS.History.Set($that.attr('data-name'), $that.attr('data-link'), $that.attr('data-pic'));
			}
		},
		'Set': function(name, link, pic) {
			if (!link) {
				link = document.URL;
			}
			var jsondata = FFCMS.Cookie.Get('ffcms_history');

			if (jsondata != undefined) {
				this.Json = eval(jsondata);

				for ($i = 0; $i < this.Json.length; $i++) {
					if (this.Json[$i].link == link) {
						return false;
					}
				}

				jsonstr = '{log:[{"name":"' + name + '","link":"' + link + '","pic":"' + pic + '"},';
				for ($i = 0; $i < this.Json.length; $i++) {
					if ($i <= this.Limit && this.Json[$i]) {
						jsonstr += '{"name":"' + this.Json[$i].name + '","link":"' + this.Json[$i].link + '","pic":"' + this.Json[$i].pic + '"},';
					} else {
						break;
					}
				}
				jsonstr = jsonstr.substring(0, jsonstr.lastIndexOf(','));
				jsonstr += "]}";
			} else {
				jsonstr = '{log:[{"name":"' + name + '","link":"' + link + '","pic":"' + pic + '"}]}';
			}
			this.Json = eval(jsonstr);
			FFCMS.Cookie.Set('ffcms_history', jsonstr, this.Days);
		},
		'Clear': function() {
			FFCMS.Cookie.Del('ffcms_history');
			$('.ffcms_history_box').html('<li class="hx_clear">已清空观看记录。</li>');
		},
	},

	'Ulog': {
		'Init': function() {
			FFCMS.Ulog.Set();
			FFCMS.Ulog.Click();

		},
		'Get': function(type, page, limit, call) {
			FFCMS.Ajax(feifeicms.path + '/index.php/user/ajax_ulog/?ac=list&type=' + type + '&page=' + page + '&limit=' + limit, 'get', 'json', '', call);
		},
		'Set': function() {
			if ($(".ffcms_ulog_set").attr('data-mid')) {
				var $that = $(".ffcms_ulog_set");
				$.get(feifeicms.path + '/index.php/user/ajax_ulog/?ac=set&mid=' + $that.attr("data-mid") + '&id=' + $that.attr("data-id") + '&sid=' + $that.attr("data-sid") + '&nid=' + $that.attr("data-nid") + '&type=' + $that.attr("data-type"));
			}
		},
		'Click': function() {
			$('body').on('click', 'a.ffcms_ulog', function(e) {

				//是否需要验证登录
				if (FFCMS.User.IsLogin == 0) {
					FFCMS.User.Login();
					return;
				}

				var $that = $(this);
				if ($that.attr("data-id")) {
					FFCMS.Ajax(feifeicms.path + '/index.php/user/ajax_ulog/?ac=set&mid=' + $that.attr("data-mid") + '&id=' + $that.attr("data-id") + '&type=' + $that.attr("data-type"), 'get', 'json', '', function(r) {
						FFCMS.Pop.Msg(100, 20, r.msg, 1000);
						if (r.code == 1) {
							$that.addClass('disabled');
						} else {
							$that.attr('title', r.msg);
						}
					});
				}
			});
		}
	},
	'User': {
		'BoxShow': 0,
		'IsLogin': 0,
		'UserId': '',
		'UserName': '',
		'GroupId': '',
		'GroupName': '',
		'Portrait': '',
		'Init': function() {
			if ($('.ffcms_user').length > 0) {
				$('body').on('click', '.ffcms_user', function(e) {
					FFCMS.User.Login();
				});

				$('.ffcms_user').hover(function(e) {
					$('.ffcms_user_box').show();
				}, function() {
					$('.ffcms_user_box').hover(function() {
						FFCMS.User.BoxShow = 1;
					}, function() {
						FFCMS.User.BoxShow = 0;
						$('.ffcms_user_box').hide();
					});
				});
			}

			if (FFCMS.Cookie.Get('user_id') != undefined && FFCMS.Cookie.Get('user_id') != '') {
				var url = feifeicms.path + '/index.php/user';
				FFCMS.User.UserId = FFCMS.Cookie.Get('user_id');
				FFCMS.User.UserName = FFCMS.Cookie.Get('user_name');
				FFCMS.User.GroupId = FFCMS.Cookie.Get('group_id');
				FFCMS.User.GroupName = FFCMS.Cookie.Get('group_name');
				FFCMS.User.Portrait = FFCMS.Cookie.Get('user_portrait');
				FFCMS.User.IsLogin = 1;

				if ($('.ffcms_user').length > 0) {
					if ($('.ffcms_user').prop("outerHTML").substr(0, 2) == '<a') {
						$('.ffcms_user').attr('href', url);
						$('.ffcms_user').text(FFCMS.User.UserName);
					} else {
						//$('.ffcms_user').html('<a class="ffcms_text" href="'+ url +'">'+ name +'</a>');
					}
				}

			} else {

			}

		},
		'CheckLogin': function() {
			if (FFCMS.User.IsLogin == 0) {
				FFCMS.User.Login();
			}
		},
		'Login': function() {
			var ac = 'ajax_login';
			if (FFCMS.Cookie.Get('user_id') != undefined && FFCMS.Cookie.Get('user_id') != '') {
				ac = 'ajax_info';
			}
			FFCMS.Pop.Show(400, 380, '用户登录', feifeicms.path + '/index.php/user/' + ac, function(r) {
				$('body').off('click', '.login_form_submit');
				$('body').on('click', '.login_form_submit', function(e) {
					$(this).unbind('click');

					FFCMS.Ajax(feifeicms.path + '/index.php/user/login', 'post', 'json', $('.ffcms_login_form').serialize(), function(r) {
						alert(r.msg);
						if (r.code == 1) {
							location.reload();
						}
					});
				});
			});
		},
		'Logout': function() {
			FFCMS.Ajax(feifeicms.path + '/index.php/user/logout', 'post', 'json', '', function(r) {
				FFCMS.Pop.Msg(100, 20, r.msg, 1000);
				if (r.code == 1) {
					location.reload();
				}
			});
		},
		'PopedomCallBack': function(trysee, h) {
			window.setTimeout(function() {
				$(window.frames["player_if"].document).find(".FeifeiPlayer").html(h);
			}, 1000 * 10 * trysee);
		},
		'BuyPopedom': function(o) {
			var $that = $(o);
			if ($that.attr("data-id")) {
				if (confirm('您确认购买此条数据访问权限吗？')) {
					FFCMS.Ajax(feifeicms.path + '/index.php/user/ajax_buy_popedom.html?id=' + $that.attr("data-id") + '&mid=' + $that.attr("data-mid") + '&sid=' + $that.attr("data-sid") + '&nid=' + $that.attr("data-nid") + '&type=' + $that.attr("data-type"), 'get', 'json', '', function(r) {
						$that.addClass('disabled');
						FFCMS.Pop.Msg(300, 50, r.msg, 2000);
						if (r.code == 1) {
							top.location.reload();
						}
						$that.removeClass('disabled');
					});
				}
			}
		}
	},
	'Pop': {
		'Remove': function() {
			$('.ffcms_pop_bg').remove();
			$('.ffcms_pop').remove();
		},
		'RemoveMsg': function() {
			$('.ffcms_pop_msg_bg').remove();
			$('.ffcms_pop_msg').remove();
		},
		'Msg': function($w, $h, $msg, $timeout) {
			if ($('.ffcms_pop_bg').length != 1) {
				FFCMS.Pop.Remove();
			}
			$('body').append('<div class="ffcms_pop_msg_bg"></div><div class="ffcms_pop_msg"><div class="pop-msg"></div></div>');
			$('.ffcms_pop_msg .pop_close').click(function() {
				$('.ffcms_pop_msg').remove();
			});

			$('.ffcms_pop_msg').width($w);
			$('.ffcms_pop_msg').height($h);
			$('.ffcms_pop_msg .pop-msg').html($msg);
			$('.ffcms_pop_msg_bg,.ffcms_pop_msg').show();
			setTimeout(FFCMS.Pop.RemoveMsg, $timeout);
		},
		'Show': function($w, $h, $title, $url, $callback) {
			if ($('.ffcms_pop_bg').length != 1) {
				FFCMS.Pop.Remove();
			}

			$('body').append('<div class="ffcms_pop_bg"></div><div class="ffcms_pop"><div class="pop_top"><h2></h2><span class="pop_close">Ｘ</span></div><div class="pop_content"></div></div>');
			$('.ffcms_pop .pop_close').click(function() {
				$('.ffcms_pop_bg,.ffcms_pop').remove();
			});

			$('.ffcms_pop').width($w);
			$('.ffcms_pop').height($h);
			$('.pop_content').html('');
			$('.pop_top').find('h2').html($title);

			FFCMS.Ajax($url, 'post', 'json', '', function(r) {
				$(".pop_content").html(r);
				$callback(r);
			}, function() {
				$(".pop_content").html('加载失败，请刷新...');
			});

			$('.ffcms_pop_bg,.ffcms_pop').show();
		}
	},
	'Pwd': {
		'Check': function(o) {
			var $that = $(o);
			if ($that.attr("data-id")) {
				FFCMS.Ajax(feifeicms.path + '/index.php/ajax/pwd.html?id=' + $that.attr("data-id") + '&mid=' + $that.attr("data-mid") + '&type=' + $that.attr("data-type") + '&pwd=' + $that.parents('form').find('input[name="pwd"]').val(), 'get', 'json', '', function(r) {
					$that.addClass('disabled');
					FFCMS.Pop.Msg(300, 50, r.msg, 2000);
					if (r.code == 1) {
						location.reload();
					}
					$that.removeClass('disabled');
				});

			}
		}
	},
	'AdsWrap': function(w, h, n) {
		document.writeln('<img width="' + w + '" height="' + h + '" alt="' + n + '" style="background-color: #CCCCCC" />');
	},
	'Css': function($url) {
		$("<link>").attr({
			rel: "stylesheet",
			type: "text/css",
			href: $url
		}).appendTo("head");
	},
	'Js': function($url) {
		$.getScript($url, function(response, status) {

		});
	},
	'Desktop': function(s) {
		location.href = feifeicms.path + '/index.php/ajax/desktop?name=' + encodeURI(s) + '&url=' + encodeURI(location.href);
	},
	'Timming': function() {
		if ($('.ffcms_timming').length == 0) {
			return;
		}
		var infile = $('.ffcms_timming').attr("data-file");
		if (infile == undefined || infile == '') {
			infile = 'api.php';
		}
		var t = (new Image());
		t.src = feifeicms.path + '/' + infile + '/timming/index?t=' + Math.random();
	},
	'Error': function(tab, id, name) {

	},
	'AddEm': function(obj, i) {
		var oldtext = $(obj).val();
		$(obj).val(oldtext + '[em:' + i + ']');
	},
	'Remaining': function(obj, len, show) {
		var count = len - $(obj).val().length;
		if (count < 0) {
			count = 0;
			$(obj).val($(obj).val().substr(0, 200));
		}
		$(show).text(count);
	},
	'Comment': {
		'Login': 0,
		'Verify': 0,
		'Init': function() {

			$('body').on('click', '.comment_face_box img', function(e) {
				var obj = $(this).parent().parent().parent().find('.comment_content');
				FFCMS.AddEm(obj, $(this).attr('data-id'));
			});
			$('body').on('click', '.comment_face_panel', function(e) {
				// $('.comment_face_box').toggle();
				$(this).parent().find('.comment_face_box').toggle();
			});
			$('body').on('keyup', '.comment_content', function(e) {
				var obj = $(this).parent().parent().parent().parent().find('.comment_remaining');
				FFCMS.Remaining($(this), 200, obj)
			});
			$('body').on('focus', '.comment_content', function(e) {
				if (FFCMS.Comment.Login == 1 && FFCMS.User.IsLogin != 1) {
					FFCMS.User.Login();
				}
			});

			$('body').on('click', '.comment_report', function(e) {
				var $that = $(this);
				if ($(this).attr("data-id")) {
					FFCMS.Ajax(feifeicms.path + '/index.php/comment/report.html?id=' + $that.attr("data-id"), 'get', 'json', '', function(r) {
						$that.addClass('disabled');
						FFCMS.Pop.Msg(100, 20, r.msg, 1000);
						if (r.code == 1) {}
					});
				}
			});

			$('body').on('click', '.comment_reply', function(e) {
				var $that = $(this);
				if ($that.attr("data-id")) {
					var str = $that.html();
					$('.comment_reply_form').remove();
					if (str == '取消回复') {
						$that.html('回复');
						return false;
					}
					if (str == '回复') {
						$('.comment_reply').html('回复');
					}
					var html = $('.comment_form').prop("outerHTML");

					var oo = $(html);
					oo.addClass('comment_reply_form');
					oo.find('input[name="comment_pid"]').val($that.attr("data-id"));

					$that.parent().after(oo);
					$that.html('取消回复');
				}
			});

			$('body').on('click', '.comment_submit', function(e) {
				var $that = $(this);
				FFCMS.Comment.Submit($that);
			});

		},
		'Show': function($page) {
			if ($(".ffcms_comment").length > 0) {
				FFCMS.Ajax(feifeicms.path + '/index.php/comment/ajax.html?rid=' + $('.ffcms_comment').attr('data-id') + '&mid=' + $('.ffcms_comment').attr('data-mid') + '&page=' + $page, 'get', 'json', '', function(r) {
					$(".ffcms_comment").html(r);
				}, function() {
					$(".ffcms_comment").html('<a href="javascript:void(0)" onclick="FFCMS.Comment.Show(' + $page + ')">评论加载失败，点击我刷新...</a>');
				});
			}
		},
		'Reply': function($o) {

		},
		'Submit': function($o) {
			var form = $o.parents('form');
			if ($(form).find(".comment_content").val() == '') {
				FFCMS.Pop.Msg(100, 20, '请输入您的评论！', 1000);
				return false;
			}
			if ($('.ffcms_comment').attr('data-mid') == '') {
				FFCMS.Pop.Msg(100, 20, '模块mid错误！', 1000);
				return false;
			}
			if ($('.ffcms_comment').attr('data-id') == '') {
				FFCMS.Pop.Msg(100, 20, '关联id错误！', 1000);
				return false;
			}
			FFCMS.Ajax(feifeicms.path + '/index.php/comment/saveData', 'post', 'json', $(form).serialize() + '&comment_mid=' + $('.ffcms_comment').attr('data-mid') + '&comment_rid=' + $('.ffcms_comment').attr('data-id'), function(r) {
				FFCMS.Pop.Msg(100, 20, r.msg, 1000);
				if (r.code == 1) {
					FFCMS.Comment.Show(1);
				} else {
					if (FFCMS.Comment.Verify == 1) {
						FFCMS.Verify.Refresh();
					}
				}
			});
		}
	}
}

$(function() {
	//异步加载图片初始化
	FFCMS.Image.Lazyload.Show();
	//自动跳转手机和pc网页地址
	FFCMS.Adaptive();
	//验证码初始化
	FFCMS.Verify.Init();
	//分页跳转初始化
	FFCMS.PageGo.Init();
	//用户部分初始化
	FFCMS.User.Init();
	//二维码初始化
	FFCMS.Qrcode.Init();
	//顶和踩初始化
	FFCMS.Digg.Init();
	//评分初始化
	FFCMS.Score.Init();
	//星星评分初始化
	FFCMS.Star.Init();
	//点击数量
	FFCMS.Hits.Init();
	//短网址
	FFCMS.Shorten.Init();
	//历史记录初始化
	FFCMS.History.Init();
	//用户访问记录初始化
	FFCMS.Ulog.Init();
	//联想搜索初始化
	FFCMS.Suggest.Init('.ffcms_wd', 1, '');
	//定时任务初始化
	FFCMS.Timming();
});