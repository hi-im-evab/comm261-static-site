const synth = new Tone.AMSynth().toMaster();
synth.volume.value = -10;

var audio = new Audio("vid/airhorn.mp3");
audio.volume = 0.5;


$(function () {
    $("#draggable3").draggable({ axis: "x", containment: "#containment-wrapper", scroll: false });

    $("#draggable3").draggable({
        drag: function () {
            var position = $("#draggable3").position();

            synth.triggerAttackRelease(position.left, '16n');
        }
    });

    $("#airhorn").on("click", function () {
        audio.play();
    });
});

