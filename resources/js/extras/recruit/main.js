var lunaWizard = {
    stepCount: 0,
    setResponsive: function () {
        var _0xd34ax2 = this;
        var _0xd34ax3 = $(window)['height']();
        var _0xd34ax4 = $(window)['width']();
        _0xd34ax3 = _0xd34ax3 > 360 ? _0xd34ax3 : 360;
        var _0xd34ax5 = $('.luna-signup-container');
        var _0xd34ax6 = $('.luna-signup-left');
        var _0xd34ax7 = $('.luna-signup-left-overlay');
        if (_0xd34ax4 >= 768) {
            _0xd34ax5['add'](_0xd34ax6)['add'](_0xd34ax7)['innerHeight'](_0xd34ax3)
        } else {
            _0xd34ax5['add'](_0xd34ax6)['add'](_0xd34ax7)['css']('height', 'auto')
        };
        _0xd34ax7['width'](($(window)['width']() - $('.container')['width']()) / 2 + 10)
    },
    changeStep: function (_0xd34ax8, _0xd34ax9) {
        var _0xd34ax2 = this;
        console['log'](_0xd34ax9);
        console['log'](this['stepCount']);
        $('html,body')['animate']({
            scrollTop: 0
        }, 'slow');
        if (_0xd34ax9 <= 0 || _0xd34ax9 > this['stepCount']) {
            return false
        };
        var _0xd34axa = $('form[name=\'signupForm\']');
        _0xd34axa['validate']({
            rules: {
                password: {
                    minlength: 6
                },
                password_confirm: {
                    minlength: 6,
                    equalTo: '#password'
                }
            },
            ignore: ':hidden',
            errorPlacement: function (_0xd34axb, _0xd34axc) {
                var _0xd34axd = _0xd34axc['parents']('.form-group');
                _0xd34axd['find']('.errorIcon')['remove']();
                _0xd34axd['append']('<span class="errorIcon"><i class="icon icon-info"></i></span>');
                _0xd34axc['parents']('.form-group')['find']('.errorIcon')['show']()['find']('i')['attr']('title', _0xd34axb['text']())['tooltip']({
                    container: 'body'
                })
            }
        });
        if (_0xd34ax9 > _0xd34ax8) {
            if (!_0xd34axa['valid']()) {
                console['log']('form is invalid');
                return
            };
            $('.step-active')['removeClass']('step-active')['addClass']('step-hide')
        } else {
            $('.step-active')['removeClass']('step-active')
        };
        var _0xd34axe = $('.step[data-step-id=\'' + _0xd34ax9 + '\']');
        _0xd34axe['removeClass']('step-hide')['addClass']('step-active');
        var _0xd34axf = $('.steps-count');
        if (_0xd34ax9 === _0xd34ax2['stepCount']) {
            _0xd34axf['html']('CONFIRM DETAILS');
            $('.button-container')['hide']();
            $('.toNext')['hide']();
            var _0xd34ax10 = $('.step-confirm');
            _0xd34axa['find']('input[type=\'text\'],input[type=\'email\'],input[type=\'tel\'],select, textarea')['each'](function () {
                _0xd34ax10['find']('.' + $(this)['attr']('name'))['text']($(this)['val']())
            });
            _0xd34axa['find']('input[type=\'radio\']')['each'](function () {
                if ($(this)['prop']('checked')) {
                    _0xd34ax10['find']('.' + $(this)['attr']('name'))['text']($(this)['val']())
                }
            })
        } else {
            $('.button-container')['show']();
            $('.toNext')['show']()
        };
        _0xd34axf['find']('span.step-current')['text'](_0xd34ax9);
        $('.dots span')['removeClass']('selected');
        $('.dots li:nth-child(' + _0xd34ax9 + ') span')['addClass']('selected');
        var _0xd34ax11 = $('.prevStep');
        if (_0xd34ax9 === 1) {
            _0xd34ax11['hide']()
        } else {
            _0xd34ax11['css']('display', 'inline-block')
        }
    },
    setInputError: function (_0xd34ax12) {
        _0xd34ax12['addClass']('input-error');
        _0xd34ax12['parents']('.step')['find']('.help-info')['hide']();
        _0xd34ax12['parents']('.step')['find']('.help-error')['show']()
    },
    isEmail: function (_0xd34ax13) {
        _0xd34ax13 = _0xd34ax13['toLowerCase']();
        var _0xd34ax14 = new RegExp(/^[a-z]{1}[\d\w\.-]+@[\d\w-]{3,}\.[\w]{2,3}(\.\w{2})?$/);
        return _0xd34ax14['test'](_0xd34ax13)
    },
    start: function () {
        var _0xd34ax2 = this;
        $('.luna-signup-container input[type=\'checkbox\'],.luna-signup-container input[type=\'radio\'], .select')['uniform']();
        $('.luna-signup-container input[name="phone"],.luna-signup-container input[name="tn_phone"]')['mask']('0000 000 0000');
        $('.datepicker')['datepicker']()['on']('changeDate', function (_0xd34ax15) {
            $(this)['datepicker']('hide');
            $(this)['focus']()['parents']('.form-group')['find']('.errorIcon')['remove']()
        });
        window['setTimeout'](function () {
            $('#tn_name')['focus']()
        }, 500);
        _0xd34ax2['setResponsive']();
        $(window)['resize'](function () {
            _0xd34ax2['setResponsive']()
        });
        _0xd34ax2['stepCount'] = $('.luna-steps .step')['length'];
        $('.luna-steps .step')['each'](function () {
            $('.dots')['append']('<li><span></span></li>');
            $('.step-count')['text'](_0xd34ax2['stepCount'])
        });
        $('.dots span')['first']()['addClass']('selected');
        $('.nextStep')['on']('click', function () {
            var _0xd34ax8 = $('.step-active')['attr']('data-step-id');
            var _0xd34ax9 = parseFloat(_0xd34ax8) + 1;
            _0xd34ax2['changeStep'](_0xd34ax8, _0xd34ax9)
        });
        $('.prevStep')['on']('click', function () {
            var _0xd34ax8 = $('.step-active')['attr']('data-step-id');
            var _0xd34ax9 = parseFloat(_0xd34ax8) - 1;
            _0xd34ax2['changeStep'](_0xd34ax8, _0xd34ax9)
        });
        var _0xd34ax10 = $('.step-confirm');
        _0xd34ax10['find']('.input-container a.editInput')['on']('click', function () {
            $(this)['parent']()['find']('input')['focus']()
        });
        _0xd34ax10['find']('.input-container a.showPass')['on']('mousedown', function () {
            $(this)['parent']()['find']('input')['attr']('type', 'text')
        })['mouseup'](function () {
            $(this)['parent']()['find']('input')['attr']('type', 'password')
        });
        _0xd34ax10['find']('.input-container input')['on']('focus', function () {
            $(this)['parent']()['find']('a')['hide']()
        });
        _0xd34ax10['find']('.input-container input')['on']('focusout', function () {
            if (!$(this)['hasClass']('confirm-input-error')) {
                $(this)['parent']()['find']('a')['show']()
            }
        });
        _0xd34ax10['find']('select')['on']('shown.bs.select', function (_0xd34ax15) {
            $(this)['parents']('.form-group')['find']('a.editInput')['hide']()
        })['on']('hidden.bs.select', function (_0xd34ax15) {
            $(this)['parents']('.form-group')['find']('a.editInput')['show']()
        });
        $('.step input')['not']('.step-confirm input')['on']('keypress', function (_0xd34ax15) {
            if (_0xd34ax15['keyCode'] === 13) {
                $('.button-container .nextStep')['click']()
            }
        });
        var _0xd34ax16 = $('form[name=\'signupForm\']');
        $('.finishBtn')['on']('click', function () {
            _0xd34ax16['submit']()
        });
        _0xd34ax16['on']('submit', function (_0xd34ax15) {
            _0xd34ax15['preventDefault']();
            if (!$('input[name=\'agreement\']')['prop']('checked')) {
                swal({
                    title: 'Warning!',
                    text: 'You must agree with the terms and conditions.',
                    type: 'warning',
                    confirmButtonText: 'Ok'
                });
                return
            };
            // swal({
            //     title: null,
            //     text: '<img class=\'luna_loading\' src=\'images/loading.svg\'/> Saving...',
            //     html: true,
            //     showConfirmButton: false
            // });
            // $['post']('smtp.php', $(this)['serialize'](), function (_0xd34ax17) {
            //     if (_0xd34ax17['success']) {
            //         swal({
            //             title: 'Success',
            //             text: 'Your information submitted successfully!',
            //             type: 'success',
            //             confirmButtonText: 'Ok'
            //         })
            //     } else {
            //         swal({
            //             title: 'Error!',
            //             text: _0xd34ax17['msg'],
            //             type: 'error',
            //             confirmButtonText: 'Ok'
            //         })
            //     }
            // }, 'json')
        })
    }
};
$['fn']['materialInput'] = function () {
    var _0xd34ax18;
    var _0xd34ax12 = this;
    _0xd34ax12['find']('input.formInput')['focus'](function (_0xd34ax15) {
        _0xd34ax12['setLabel'](_0xd34ax15['target']);
        _0xd34ax12['checkFocused'](_0xd34ax15['target'])
    });
    _0xd34ax12['find']('input.formInput')['focusout'](function (_0xd34ax15) {
        _0xd34ax12['setLabel'](_0xd34ax15['target']);
        _0xd34ax12['checkUnFocused'](_0xd34ax15['target'])
    });
    _0xd34ax12['find']('input.formInput')['keypress'](function (_0xd34ax15) {
        $(this)['parents']('.form-group')['find']('.errorIcon')['hide']()
    });
    this['setLabel'] = function (_0xd34ax19) {
        _0xd34ax18 = _0xd34ax12['find']('label[for=' + _0xd34ax19['id'] + ']')
    };
    this['getLabel'] = function () {
        return _0xd34ax18
    };
    this['checkFocused'] = function (_0xd34ax19) {
        _0xd34ax12['getLabel']()['addClass']('active', '');
        $(_0xd34ax19)['removeClass']('input-error')
    };
    this['checkUnFocused'] = function (_0xd34ax19) {
        if ($(_0xd34ax19)['val']()['length'] === 0) {
            _0xd34ax12['getLabel']()['removeClass']('active')
        }
    }
};

function handleFileSelect() {
    if (!window['File'] || !window['FileReader'] || !window['FileList'] || !window['Blob']) {
        alert('The File APIs are not fully supported in this browser.');
        return
    };
    input = document['getElementById']('fileinput');
    if (!input) {
        alert('Um, couldn\'t find the fileinput element.')
    } else {
        if (!input['files']) {
            alert('This browser doesn\'t seem to support the `files` property of file inputs.')
        } else {
            if (!input['files'][0]) {
                alert('Please select a file before clicking \'Load\'')
            } else {
                file = input['files'][0];
                fr = new FileReader();
                fr['onload'] = receivedText;
                fr['readAsDataURL'](file)
            }
        }
    }
}
$(document)['ready'](function () {
    $('.luna-loader-container')['fadeOut']('slow');
    $('.luna-signup-container')['show']();
    $('.luna-steps')['materialInput']();
    $('.selectpicker')['selectpicker']();
    lunaWizard['start']()
})
