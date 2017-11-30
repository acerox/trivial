var stage = 1;

function starAnimation() {
    $('#stars').addClass("bounceIn animated");
}

function nextStage(action) {
    if (stage < 1 && action == 'sum') {
        $('#wrapper-stars-' + stage).hide();
        $('#wrapper-stars-' + stage + 1).addClass("bounceIn animated");
        stage += 1;
    } else {}
}