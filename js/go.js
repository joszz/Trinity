var text1 = "Wake up, " + name + "...";
var text2 = "The Matrix has you...";
var text3 = ":)        ;)        :p        :]";
var cheeseyReplayTexts = new Array("I'm diggin' this!", "Go, Go, Go!", "I'll take the red pill", "Blue pill me, please", "Is this real? I won't believe it", "What is the Matrix?", "Your mind makes it real",
"Throughout human history, we have been dependent on machines to survive. Fate, it seems, is not without a sense of irony.", "Do not try and bend the spoon. That's impossible. Instead... only try to realize the truth.",
"Sooner or later you're going to realize just as I did that there's a difference between knowing the path and walking the path.", "Have you ever had a dream, that you were so sure was real? What if you were unable to wake from that dream? How would you know the difference between the dream world and the real world? ",
"Whoa! déjà vu", "What did you just say?", "Perhaps we are asking the wrong questions", "If real is what you can feel, smell, taste and see, then 'real' is simply electrical signals interpreted by your brain",
"What are you waiting for? You're faster than this!", "Unfortunately, no one can be told what the Matrix is. You have to see it for yourself.", "Good shit, huh? It's good for two things: degreasing engines and killing brain cells.",
"There is no spoon?", "I'm trying to free your mind", "Free your mind", "Welcome to the real world", "Never send a human to do a machine's job", "What are you trying to tell me? That I can dodge bullets?", "So what do you need? Besides a miracle.",
"Tell me, Mr. Anderson, what good is a phone call when you are unable to speak? ", "You know, I know this steak doesn't exist. I know that when I put it in my mouth, the Matrix is telling my brain that it is juicy and delicious. After nine years, you know what I realize? Ignorance is bliss!",
"You are the One. You see, you may have spent the last few years looking for me, but I have spent my entire life looking for you.", "Hallelujah. You're my savior, man. My own personal Jesus Christ.",
"I'd ask you to sit down, but, you're not going to anyway. And don't worry about the vase.", "You hear that Mr. Anderson?... That is the sound of inevitability...", "Yeah. That sounds like a really good deal. But I got a better one. How about... I give you the finger... and you give me my phone call? ",
"You've been living in a dream world", " I know kung fu!", "What is 'real'? How do you define 'real'?", "Here you go, buddy; Breakfast of Champions", "Welcome to the desert of the real", "Mr. Wizard. Get me the hell out of here.",
"To deny our own impulses is to deny the very thing that makes us human.", "What is happening to me?", "Dodge this!", "It just sounds to me like you need to unplug, man", "Do you believe in fate Neo?");

var content, blink, replay;
var blinkIntervalId = -1;
var blinkerInterval = 500;
var offsetRandomTimeout = 51;
var finished = false;
var pickedCheeseyReplayTexts = new Array();

$(function () {
    content = $("div#content");
    blink = $("span#blinker");
    replay = $("div#replay");

    start();

    replay.click(function () {
        finished = false;
        content.find("p").html("");
        document.title = "";

        replay.fadeOut("slow", function () {
            content.fadeIn("slow", function () {
                blink.show();
                start();
            });
        });
    });
});

function start() {
    blinker(true);

    var message = function () {
        window.clearTimeout(blinkIntervalId);
        blink.hide();
        appendLine(0, text1);
    };
    window.setTimeout(message, 4000);
}

function blinker(isOn) {
    if (isOn) {
        blink.show();
    }
    else {
        blink.hide();
    }

    var message = function () { blinker(!isOn); };
    blinkIntervalId = window.setTimeout(message, blinkerInterval);
}

function appendLine(index, lineToDisplay) {
    content.find("p").append(lineToDisplay[index]);
    document.title = document.title + (lineToDisplay[index] == " " && lineToDisplay[index - 1] != "," && lineToDisplay[index - 1] != " " ? "-" : lineToDisplay[index]);

    if (lineToDisplay.length > index + 1) {
        var message = function () {
            appendLine(index + 1, lineToDisplay);
        };
        window.setTimeout(message, getRandomTimeout());
    }
    else if (lineToDisplay != text2 && lineToDisplay != text3) {
        var message = function () {
            fadeContent(text2, getRandomTimeout());
        };
        window.setTimeout(message, 6000);
    }
    else if (lineToDisplay != text3 && smileys) {
        var message = function () {
            fadeContent(text3, getRandomTimeout());
        };
        window.setTimeout(message, 10000);
    }
    else if (!finished) {
        finished = true;

        if (!loop) {
            var message = function () {
                content.fadeOut("fast", function () {
                    if (doReplay) showReplay();
                    else {
                        replay.fadeIn("slow");
                    }
                });

            };
            window.setTimeout(message, 4000);
        }
        else {

            var replay = function () {
                content.fadeOut("fast", function () {
                    window.setTimeout("replay.trigger('click')", 5000);
                });
            };
            window.setTimeout(replay, 5000);
        }
    }
}

function showReplay() {
    var random = Math.floor(Math.random() * (cheeseyReplayTexts.length - 1));

    if (pickedCheeseyReplayTexts.length == cheeseyReplayTexts.length) {
        pickedCheeseyReplayTexts = new Array();
    }

    while ($.inArray(random, pickedCheeseyReplayTexts) != -1) {
        random = Math.floor(Math.random() * (cheeseyReplayTexts.length - 1));
    }

    pickedCheeseyReplayTexts[pickedCheeseyReplayTexts.length] = random;

    replay.find("a").first().html(cheeseyReplayTexts[random] + " (or in other words; Replay!)");
    document.title = "Trinity - The Matrix Generator";
    replay.fadeIn("slow");
}

function fadeContent(nextLineToDisplay, timeout) {
    content.fadeOut("fast", function () {
        content.find("p").html("");
        document.title = "";
        content.fadeIn("slow", function () {
            appendLine(0, nextLineToDisplay);
        });
    });
}

function getRandomTimeout() {
    return Math.floor((Math.random() * 100) + offsetRandomTimeout);
}