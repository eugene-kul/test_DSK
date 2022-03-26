function sendMsg(form) {
	if(form.querySelector('.js-form-success')) {
		form.querySelector('.js-form-success').classList.add('active');
	}
}

function noSendMsg(form) {
	if(form.querySelector('.js-form-error')) {
		form.querySelector('.js-form-error').classList.add('active');
	}
}

function initMask(elem) {
	//маска для ввода телефона
	let inputList = document.querySelectorAll(elem);
	let matrix = "+7 (___) ___-__-__";
	
	replaceAt = function(string, index, replacement) {
		return string.substr(0, index) + replacement + string.substr(index + replacement.length);
	}
	
	for (let input of inputList) {
		input.addEventListener("input", mask, false);
		input.addEventListener("focus", mask, false);
		input.addEventListener("blur", mask, false);
	}
	function mask(event) {
		let val = this.value.replace(/\D/g, ""),
			def = matrix.replace(/\D/g, ""),
			i = 0;
		if (
			(def.length >= val.length && (val = def),
				(this.value = matrix.replace(/./g, function (e) {
					return /[_\d]/.test(e) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : e;
				})),
				("78" !== val && "77" !== val) || 2 !== i || ((val = replaceAt(val, 0, "7")), (this.value = "+7 (")),
			"blur" == event.type)
		)
			2 == this.value.length && (this.value = "");
		else if ((this.focus(), this.setSelectionRange)) this.setSelectionRange(this.value.length, this.value.length);
		else if (this.createTextRange) {
			var range = this.createTextRange();
			range.collapse(!0), range.moveEnd("character", this.value.length), range.moveStart("character", this.value.length), range.select();
		}
		console.log(val,this.value.length)
	}
}

/*
 * Application
 */

$(document).tooltip({
    selector: "[data-toggle=tooltip]"
})

/*
 * Auto hide navbar
 */
jQuery(document).ready(function($){
    var $header = $('.navbar-autohide'),
        scrolling = false,
        previousTop = 0,
        currentTop = 0,
        scrollDelta = 10,
        scrollOffset = 150

    $(window).on('scroll', function(){
        if (!scrolling) {
            scrolling = true

            if (!window.requestAnimationFrame) {
                setTimeout(autoHideHeader, 250)
            }
            else {
                requestAnimationFrame(autoHideHeader)
            }
        }
    })

    function autoHideHeader() {
        var currentTop = $(window).scrollTop()

        // Scrolling up
        if (previousTop - currentTop > scrollDelta) {
            $header.removeClass('is-hidden')
        }
        else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
            // Scrolling down
            $header.addClass('is-hidden')
        }

        previousTop = currentTop
        scrolling = false
    }
});
