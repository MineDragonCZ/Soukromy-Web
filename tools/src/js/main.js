/**
 * MAIN JS FILE
 * @author MineDragonCZ_
 */

// darkmode
function setRootVar(name, value) {
	var r = document.querySelector(':root');
	r.style.setProperty(name, value);
}
function switchModes(change) {
	let whitemode = getCookie("whitemode");
	if (change) whitemode = !whitemode;
	setCookie("whitemode", whitemode);
	if (!whitemode) {
		// darkmode
		setRootVar("--icon", "'🌘'");

		setRootVar('--primary', '#12141C');
		setRootVar('--secondary', '#119C32');
		setRootVar('--third', '#868686');
		setRootVar('--footer', '#171924');
		setRootVar('--fifth', '#DBD3C8');

		setRootVar('--shadow', 'none');

		setRootVar('--cardbacks', '#171924');
		setRootVar('--navlink', '#fff');

		setRootVar('--statusColor', '#fff');
		setRootVar('--statusBorder', '2px solid #fff');

		setRootVar('--waves1', '#12141C00');
		setRootVar('--waves2', '#12141C77');
		setRootVar('--waves3', '#12141CAA');
		setRootVar('--waves4', '#12141CDD');
		setRootVar('--waves5', '#12141CFF');

		setRootVar('--navback', 'linear-gradient(180deg, #12141Cff 0%, #12141C77 61%, #12141C00 100%)');

		setRootVar('--backimg1', 'url("/tools/src/imgs/headers/header_dark4.webp")');

		// btns
		setRootVar('--btn1back', 'linear-gradient(to right, #119C32 0%, #119C32 25%, #0E8029 75%, #0E8029 100%)');
		
		setRootVar('--btn2color', '#DBD3C8');
		setRootVar('--btn2border', '1px solid #119C32');
		setRootVar('--btn2color-hover', '#119C32');
		setRootVar('--btn2border-hover', '1px solid #119C32');
		setRootVar('--btn2color-focus', '#119C32');
		setRootVar('--btn2border-focus', '1px solid #119C32');

		// inputs
		setRootVar('--inputsback', '#2B2E37');
		setRootVar('--inputsback-active', '#119C32');
		return;
	}
	else if (whitemode) {
		// lightmode
		setRootVar("--icon", "'🌞'");

		setRootVar('--primary', '#D8D8D8');
		setRootVar('--secondary', '#119C32');
		setRootVar('--third', '#7C7C7C');
		setRootVar('--footer', '#CDD0DA');
		setRootVar('--fifth', '#46423C');

		setRootVar('--shadow', '-53px 53px 45px 10px rgba(0,0,0,0.3)');

		setRootVar('--cardbacks', '#CDD0DA');
		setRootVar('--navlink', '#000');

		setRootVar('--statusColor', '#000');
		setRootVar('--statusBorder', '2px solid #000');

		setRootVar('--waves1', '#D8D8D800');
		setRootVar('--waves2', '#D8D8D877');
		setRootVar('--waves3', '#D8D8D8AA');
		setRootVar('--waves4', '#D8D8D8DD');
		setRootVar('--waves5', '#D8D8D8FF');

		setRootVar('--navback', 'linear-gradient(180deg, #D8D8D8ff 0%, #D8D8D877 61%, #D8D8D800 100%)');

		setRootVar('--backimg1', 'url("/tools/src/imgs/headers/header_light4.webp")');

		// btns
		setRootVar('--btn1back', 'linear-gradient(to right, #119C32 0%, #119C32 25%, #0E8029 75%, #0E8029 100%)');

		setRootVar('--btn2color', '#000');
		setRootVar('--btn2border', '1px solid #000');
		setRootVar('--btn2color-hover', '#BA723A');
		setRootVar('--btn2border-hover', '1px solid #000');
		setRootVar('--btn2color-focus', '#BA723A');
		setRootVar('--btn2border-focus', '1px solid #000');

		// inputs
		setRootVar('--inputsback', '#BBBEC9');
		setRootVar('--inputsback-active', '#119C32');
		return;
	}
}
switchModes(false);

let bodyLoadingDiv;
let unloadFuncTiming;
let unloadFunc = function (loading) {
	bodyLoadingDiv = document.getElementById("bodyLoading");
	if (bodyLoadingDiv) {
		bodyLoadingDiv.style.opacity = 0;
		unloadFuncTiming = setTimeout(function () {
			bodyLoadingDiv.style.display = "block";
			bodyLoadingDiv.style.opacity = 1;
		}, ((loading == true) ? 0 : 500));
		setLoading(document.getElementById("bodyLoadingProgress"));
	}
};
unloadFunc(true);

function loaded() {
	bodyLoadingDiv = document.getElementById("bodyLoading");
	if (bodyLoadingDiv) {
		if (unloadFuncTiming != null && unloadFuncTiming != undefined)
			clearTimeout(unloadFuncTiming);
		bodyLoadingDiv.style.display = "none";
		bodyLoadingDiv.style.opacity = 0;
	}
	document.getElementById("bodyContent").style.opacity = 1;
}
function unloaded() {
	unloadFunc(false);
	document.getElementById("bodyContent").style.opacity = 0;
}

/*window.addEventListener('load', (event) => {
	loaded();
});
window.addEventListener('beforeunload', (event) => {
	unloaded();
});*/


// TOGGLER
let toggled = {};
function toggleElementState(elmId, defaultState, toggledState, attributeToChange) {
	let elm = document.getElementById(elmId);
	if (toggled[elmId] !== undefined) {
		if (toggled[elmId]) {
			toggled[elmId] = false;
			if (attributeToChange == "innerHTML") {
				elm.innerHTML = defaultState;
			}
			else if (attributeToChange == "innerHTMLMath") {
				defaultState = defaultState.replaceAll("*current*", elm.innerHTML);
				elm.innerHTML = addbits(defaultState);
			}
			else if (attributeToChange == "class")
				elm.classList.value = defaultState;
			else
				elm.setAttribute(attributeToChange, defaultState);
			return;
		}
		else {
			toggled[elmId] = true;
			if (attributeToChange == "innerHTML") {
				elm.innerHTML = toggledState;
			}
			else if (attributeToChange == "innerHTMLMath") {
				toggledState = toggledState.replaceAll("*current*", elm.innerHTML);
				elm.innerHTML = addbits(toggledState);
			}
			else if (attributeToChange == "class")
				elm.classList.value = toggledState;
			else
				elm.setAttribute(attributeToChange, toggledState);
			return;
		}
	}
	toggled[elmId] = false;
	toggleElementState(elmId, defaultState, toggledState, attributeToChange);
}
// STAY LOGGED FUNCTIONS
function setStayLoggedUser(user, pass) {
	pass = forge_sha256(pass);
	setCookie("users_pass", pass);
	setCookie("users_user", user);
	return false;
}

function pushLink(id, link) {
	window.history.pushState({ id: "100" }, id, link);
}

function getFromLink(attr) {
	let uu = window.location.href;
	let par = (new URL(uu)).searchParams;
	return par.get(attr);
}

function replaceURLTags(input) {
	output = input;
	output = output.replaceAll("\&", "*and*");
	output = output.replaceAll("\#", "*hashtag*");
	output = output.replaceAll("\/", "*slash*");
	output = output.replaceAll("\<", "*sipka_l*");
	output = output.replaceAll("\>", "*sipka_p*");
	output = output.replaceAll("\.", "*tecka*");
	output = output.replaceAll("\:", "*drojtecka*");

	return output;
}

function replaceURLTagsBack(input) {
	output = input;
	output = output.replaceAll("*and*", "\&");
	output = output.replaceAll("*hashtag*", "\#");
	output = output.replaceAll("*slash*", "\/");
	output = output.replaceAll("*sipka_l*", "\<");
	output = output.replaceAll("*sipka_p*", "\>");
	output = output.replaceAll("*tecka*", "\.");
	output = output.replaceAll("*drojtecka*", "\:");

	return output;
}

/**
 * ALERTS / NOTIFERS
 */

function dismissAlerts() {
	alertify.dismissAll();
}

function alertSuccess(mess, time) {
	alertify.set('notifier', 'position', 'top-right');
	alertify.notify(
		`
		<div class="row align-items-center">
			<div class="col-3 center"><span class="text-xxl"><i class="fa-solid fa-check success-check"></i></span></div>
			<div class="col-9">` + mess + `</div>
		</div>`

		, 'success', time, function () { });
}

function alertError(mess, time) {
	alertify.set('notifier', 'position', 'top-right');
	alertify.notify(
		`
		<div class="row align-items-center">
			<div class="col-3 center"><span class="text-xxl"><i class="fa-solid fa-xmark error-check"></i></span></div>
			<div class="col-9">` + mess + `</div>
		</div>`

		, 'error', time, function () { });
}

function alertLoading(mess, time) {
	alertify.set('notifier', 'position', 'top-right');
	alertify.notify(
		`
		<div class="row align-items-center">
			<div class="col-3 center"><span class="text-xxl"><i class="fa-solid fa-spinner loading-check"></i></span></div>
			<div class="col-9">` + mess + `</div>
		</div>`

		, 'loading', time, function () { });
}


function setLoading(elm) {
	if (elm == null || elm == undefined) return;
	if (elm instanceof Array || elm instanceof HTMLCollection) {
		for (let i = 0; i < elm.length; i++) {
			elm[i].innerHTML = `
			<div class="row justify-content-center align-items-center" style="height: max(100%, 250px);">
				<div class="col-12" align="center">
					<div class="dotsLoader"></div>
				</div>
			</div>
			`;
		}
		return;
	}
	elm.innerHTML = `
	<div class="row justify-content-center align-items-center" style="height: max(100%, 250px);">
		<div class="col-12" align="center">
			<div class="dotsLoader"></div>
		</div>
	</div>
	`;
}

function setLoadingAsTR(elm, colspan) {
	if (elm == null || elm == undefined) return;
	elm.innerHTML = `
	<tr><td colspan="${colspan}"><div class="row justify-content-center align-items-center" style="height: max(100%, 250px);">
		<div class="col-12" align="center">
			<div class="dotsLoader"></div>
		</div>
	</div></td></tr>
	`;
}


function replace_urls(content) {
	var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/i;
	return content.replace(exp, "[url ($1) ($1)]");
}

function openNotify(id, from, title) {
	let modalElm = $("#notifer_modal");
	let body = document.getElementById("n_text_" + id).innerHTML;

	modalElm.find('#n_notifyFrom').text(from);
	modalElm.find('#n_notifyTitle').text(title);
	document.getElementById('n_notifyBody').innerHTML = body;

	modalElm.find('#n_notifyid').val(id);

	modalElm.modal("show");
	dissmissNotifyId(id);
}
let notiferCSListener;
function dissmissNotifyId(id) {
	if (notiferCSListener == undefined)
		notiferCSListener = registerListenerCS(null, null, null, null);
	let request = new FormData();

	if (id == undefined || id == null) id = -1;

	request.append("notifer_dissmiss", "true");
	request.append("id", id);

	setRequestCS(notiferCSListener, request);
	disableNotify();
	postToServer(notiferCSListener);
	if (notifer_boxListener != null)
		getFromServerForce(notifer_boxListener);

	if (notiferListener != -2)
		getFromServerForce(notiferListener);
}
function dissmissNotify() {
	let elm = document.getElementById("n_notifyid");
	if (elm == undefined || elm == null) return;
	let id = elm.value;
	dissmissNotifyId(id);
}
function dissmissAllNotify() {
	dissmissNotifyId(null);
}

function openLink(newWindow, url, open) {
	var t = confirm('Opravdu chcete otevřít tento odkaz?\n' + url);
	if (open && t) {
		if (newWindow) window.open(url);
		else window.location.href = url;
		return false;
	}
	return t;
}


// ---------------------------------------------------
// CLIPBOARD
function copyToClip(text) {
	var input = document.body.appendChild(document.createElement("textarea"));
	input.textContent = text;
	input.style.position = "fixed";
	input.style.opacity = "0";
	input.focus();
	input.select();
	document.execCommand('copy');
	input.parentNode.removeChild(input);
	alertSuccess("Zkopírováno!");
}

// INSERTING TAGS INTO TEXTAREA
function insertIntoTextarea(elmId, value, curOffset) {
	var elm = document.getElementById(elmId);
	elm.focus();
	var curPosStart = elm.selectionStart;
	var curPosEnd = elm.selectionEnd;

	let x = elm.value;
	let text_to_insertStart = value.slice(0, curOffset);
	let text_to_insertEnd = value.slice(curOffset);
	elm.value = x.slice(0, curPosStart) + text_to_insertStart + x.slice(curPosStart, curPosEnd) + text_to_insertEnd + x.slice(curPosEnd);
	elm.selectionStart = (curPosStart + curOffset);
	elm.selectionEnd = (curPosEnd + curOffset);
}

// SCROLLING BY ARROWS
function Position(obj) {
	var currenttop = 0;
	if (obj.offsetParent) {
		do {
			currenttop += obj.offsetTop;
		} while ((obj = obj.offsetParent));
		return [currenttop];
	}
}
function scrollToContent() {
	window.scroll(0, Position(document.getElementById("scroll_box")) - 100);
	//window.scroll(0, screen.height);
}

// Date utils
function getDayName(id, short) {
	if (short)
		return ['Ne', 'Po', 'Út', 'St', 'Čt', 'Pá', 'So'][id];
	return ['Neděle', 'Pondělí', 'Úterý', 'Středa', 'Čtvrtek', 'Pátek', 'Sobota'][id];
}

// Color utils
function HSLToRGB(h, s, l) {
	s /= 100;
	l /= 100;
	const k = n => (n + h / 30) % 12;
	const a = s * Math.min(l, 1 - l);
	const f = n => l - a * Math.max(-1, Math.min(k(n) - 3, Math.min(9 - k(n), 1)));
	return [255 * f(0), 255 * f(8), 255 * f(4)];
};

// Download img
function downloadIMG(data, name) {
	var a = $("<a>")
		.attr("href", data)
		.attr("download", name)
		.appendTo("body");

	a[0].click();

	a.remove();
}