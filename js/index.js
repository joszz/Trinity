$(function () {
    $("a, button").vibrate();

    Waves.attach(".btn, button");
    Waves.init();

    $(".copy").click(function () {
        var textarea = $(this).next();
        textarea.val("https://josnienhuis.gotgeeks.com/trinity/?name=" + $("input#name").val());
        textarea.select();
        document.execCommand("copy");

        alert("Link copied to clipboard");
        return false;
    });

    digitalRain();
});

function digitalRain() {
    var s = window.screen;
    var width = q.width = window.innerWidth;
    var height = q.height = window.innerHeight;
    var yPositions = Array(300).join(0).split('');
    var ctx = q.getContext('2d');

    var draw = function () {
        ctx.fillStyle = 'rgba(0,0,0,.05)';
        ctx.fillRect(0, 0, width, height);
        ctx.fillStyle = '#0F0';
        ctx.font = '10pt Georgia';
        yPositions.map(function (y, index) {
            text = String.fromCharCode(1e2 + Math.random() * 33);
            x = (index * 15) + 10;
            q.getContext('2d').fillText(text, x, y);
            if (y > 100 + Math.random() * 1e4) {
                yPositions[index] = 0;
            }
            else {
                yPositions[index] = y + 15;
            }
        });
    };
    RunMatrix();
    function RunMatrix() {
        if (typeof Game_Interval != "undefined") clearInterval(Game_Interval);
        Game_Interval = setInterval(draw, 33);
    }
}