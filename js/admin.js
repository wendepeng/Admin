/*
 * javascript for webadmin
 * created @2011-11-11
 * by lane
 * 
*/
(function() {
    var YUI = miniYUI, YUD = YUI.dom, YUE = YUI.event;
    var dTar, sTag, dLi,
        sCls = 'on',
        txtClose = '收起',
        txtOpen = '展开';
    var switchMenuInit = function(module) {
        var fnSwitch = function(dA) {
            dLi = dA.parentNode.parentNode;
            if (YUD.hasClass(dLi, sCls)) {
                YUD.removeClass(dLi, sCls);
                dA.title = txtOpen;
            }else {
                YUD.addClass(dLi, sCls);
                dA.title = txtClose;
            }
        };

        YUE.on(module, 'click', function(e) {
            dTar = YUE.getTarget(e);
            sTag = dTar.tagName.toLowerCase();
            if (sTag == 'a' && dTar.parentNode.tagName.toLowerCase() == 'h4') {
                YUE.stopEvent(e);
                fnSwitch(dTar);
            }
        });
    };
    
    YUI.doWhileExist('menu', switchMenuInit);
})();
