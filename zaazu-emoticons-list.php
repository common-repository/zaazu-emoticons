<?php
$ZEUrl = get_option('siteurl') . '/wp-content/plugins/zaazu-emoticons/emoticons/';
$opt 	= get_option('zaazu_emoticons');

$ZEReplace	= array(
':Wink:' => '<a href="http://zaazu.com/41-Wink-Smiley-male-happy-smiley-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000041-medium.gif" style="border:none;background:none;" alt="Wink" /></a>',
':Happy:' => '<a href="http://zaazu.com/42-male01-james-happy-smiley-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000042-medium.gif" style="border:none;background:none;" alt="Happy" /></a>',
':Happy-Grin:' => '<a href="http://zaazu.com/43-male03-happy-smiley-smile-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000043-medium.gif" style="border:none;background:none;" alt="Happy-Grin" /></a>',
':Wink:' => '<a href="http://zaazu.com/44-male04-male-happy-smiley-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000044-medium.gif" style="border:none;background:none;" alt="Wink" /></a>',
':Pleasure:' => '<a href="http://zaazu.com/45-male05-happy-smiley-smile-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000045-medium.gif" style="border:none;background:none;" alt="Pleasure" /></a>',
':Delicious:' => '<a href="http://zaazu.com/46-male06-male-happy-smiley-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000046-medium.gif" style="border:none;background:none;" alt="Delicious" /></a>',
':Tounge-Out:' => '<a href="http://zaazu.com/47-male07-male-happy-smiley-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000047-medium.gif" style="border:none;background:none;" alt="Tounge-Out" /></a>',
':Delighted:' => '<a href="http://zaazu.com/48-male09-male-happy-smiley-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000048-medium.gif" style="border:none;background:none;" alt="Delighted" /></a>',
':Worry:' => '<a href="http://zaazu.com/49-male10-male-smiley-thinking-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000049-medium.gif" style="border:none;background:none;" alt="Worry" /></a>',
':Overjoy:' => '<a href="http://zaazu.com/50-male11-male-smiley-laugh-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000050-medium.gif" style="border:none;background:none;" alt="Overjoy" /></a>',
':Pondering:' => '<a href="http://zaazu.com/51-male12-male-thingking-uncertain-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000051-medium.gif" style="border:none;background:none;" alt="Pondering" /></a>',
':Weary:' => '<a href="http://zaazu.com/52-male13-male-sad-lonely-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000052-medium.gif" style="border:none;background:none;" alt="Weary" /></a>',
':Amazed:' => '<a href="http://zaazu.com/54-male14-male-shock-stun-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000054-medium.gif" style="border:none;background:none;" alt="Amazed" /></a>',
':Angry:' => '<a href="http://zaazu.com/57-male15-male-angry-irritated-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000057-medium.gif" style="border:none;background:none;" alt="Angry" /></a>',
':Disapproval:' => '<a href="http://zaazu.com/59-male17-male-mad-angry-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000059-medium.gif" style="border:none;background:none;" alt="Disapproval" /></a>',
':Conceited:' => '<a href="http://zaazu.com/60-male18-male-thinking-eyebrows-up-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000060-medium.gif" style="border:none;background:none;" alt="Conceited" /></a>',
':Cry-Out:' => '<a href="http://zaazu.com/61-male19-male-crying-tears-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000061-medium.gif" style="border:none;background:none;" alt="Cry-Out" /></a>',
':I-see-stars:' => '<a href="http://zaazu.com/62-male20-male-cross-eye-dizzy-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000062-medium.gif" style="border:none;background:none;" alt="I-see-stars" /></a>',
':Tears:' => '<a href="http://zaazu.com/63-male21-male-cry-tears-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000063-medium.gif" style="border:none;background:none;" alt="Tears" /></a>',
':Cry:' => '<a href="http://zaazu.com/64-male22-male-cry-tears-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000064-medium.gif" style="border:none;background:none;" alt="Cry" /></a>',
':Tired:' => '<a href="http://zaazu.com/65-male23-male-tired-weary-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000065-medium.gif" style="border:none;background:none;" alt="Tired" /></a>',
':Shout:' => '<a href="http://zaazu.com/66-male24-male-shout-yell-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000066-medium.gif" style="border:none;background:none;" alt="Shout" /></a>',
':Sick:' => '<a href="http://zaazu.com/67-male25-male-sick-ill-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000067-medium.gif" style="border:none;background:none;" alt="Sick" /></a>',
':Who-s-the-man:' => '<a href="http://zaazu.com/68-male26-male-smiley-smile-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000068-medium.gif" style="border:none;background:none;" alt="Who-s-the-man" /></a>',
':Zzzzzz:' => '<a href="http://zaazu.com/69-male27-male-sleep-sleeping-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000069-medium.gif" style="border:none;background:none;" alt="Zzzzzz" /></a>',
':I-m-in-love:' => '<a href="http://zaazu.com/70-male28-male-inlove-love-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000070-medium.gif" style="border:none;background:none;" alt="I-m-in-love" /></a>',
':Movie-Time:' => '<a href="http://zaazu.com/71-male29-male-theater-cinema-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000071-medium.gif" style="border:none;background:none;" alt="Movie-Time" /></a>',
':Sad:' => '<a href="http://zaazu.com/72-male30-male-sad-lonely-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000072-medium.gif" style="border:none;background:none;" alt="Sad" /></a>',
':Whistling:' => '<a href="http://zaazu.com/73-male31-male-smiley-whistle-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000073-medium.gif" style="border:none;background:none;" alt="Whistling" /></a>',
':Approve:' => '<a href="http://zaazu.com/74-male32-male-smiley-ok-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000074-medium.gif" style="border:none;background:none;" alt="Approve" /></a>',
':Angel:' => '<a href="http://zaazu.com/76-download-angels-smileys-guardian-angels-angels-male-smiley-angel-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000076-medium.gif" style="border:none;background:none;" alt="Angel" /></a>',
':The-Incredible-Hulk:' => '<a href="http://zaazu.com/77-The-Incredible-Hulk-male-incredible-hulk-angry-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000077-medium.gif" style="border:none;background:none;" alt="The-Incredible-Hulk" /></a>',
':Girl-Teasing:' => '<a href="http://zaazu.com/81-female04-female-girl-happy-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000081-medium.gif" style="border:none;background:none;" alt="Girl-Teasing" /></a>',
':Mad:' => '<a href="http://zaazu.com/99-male16-male-mad-angry-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000099-medium.gif" style="border:none;background:none;" alt="Mad" /></a>',
':Heart-Chocolate-Gift:' => '<a href="http://zaazu.com/106-valentines02-rev-static-gif-happy-smiley-valentine-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000106-medium.gif" style="border:none;background:none;" alt="Heart-Chocolate-Gift" /></a>',
':All-I-See-is-Love:' => '<a href="http://zaazu.com/108-All-I-See-is-Love-happy-smiley-valentine-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000108-medium.gif" style="border:none;background:none;" alt="All-I-See-is-Love" /></a>',
':Love-Gift:' => '<a href="http://zaazu.com/110-valentine24-static-male-happy-valentine-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000110-medium.gif" style="border:none;background:none;" alt="Love-Gift" /></a>',
':Valentine-s-Day:' => '<a href="http://zaazu.com/113-valentine16-static-copy-male-happy-valentine-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000113-medium.gif" style="border:none;background:none;" alt="Valentine-s-Day" /></a>',
':Love-Letter:' => '<a href="http://zaazu.com/115-valentine26-static-male-happy-valentine-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000115-medium.gif" style="border:none;background:none;" alt="Love-Letter" /></a>',
':i-heart-us:' => '<a href="http://zaazu.com/116-valentine34-static-female-girl-happy-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000116-medium.gif" style="border:none;background:none;" alt="i-heart-us" /></a>',
':Valentine-Kiss:' => '<a href="http://zaazu.com/117-valentine33-static-happy-smiley-kiss-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000117-medium.gif" style="border:none;background:none;" alt="Valentine-Kiss" /></a>',
':Heartbeat:' => '<a href="http://zaazu.com/118-valentines08-static-male-happy-heart-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000118-medium.gif" style="border:none;background:none;" alt="Heartbeat" /></a>',
':Heart:' => '<a href="http://zaazu.com/119-Heart-smiley-happy-heart-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000119-medium.gif" style="border:none;background:none;" alt="Heart" /></a>',
':Flowers-for-you:' => '<a href="http://zaazu.com/120-valentines05c-static-valentine-cupid-heart-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000120-medium.gif" style="border:none;background:none;" alt="Flowers-for-you" /></a>',
':Roses-are-red:' => '<a href="http://zaazu.com/121-valentine27-static-male-happy-valentine-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000121-medium.gif" style="border:none;background:none;" alt="Roses-are-red" /></a>',
':Valentine-s-Day:' => '<a href="http://zaazu.com/122-valentine23-static-valentine-happy-smiley-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000122-medium.gif" style="border:none;background:none;" alt="Valentine-s-Day" /></a>',
':Be-Mine:' => '<a href="http://zaazu.com/125-valentine21-static-copy-male-valentine-heart-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000125-medium.gif" style="border:none;background:none;" alt="Be-Mine" /></a>',
':Make-A-Birthday-Wish:' => '<a href="http://zaazu.com/127-bday01-copy-bday-birthday-cake-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000127-medium.gif" style="border:none;background:none;" alt="Make-A-Birthday-Wish" /></a>',
':Happy-Birthday:' => '<a href="http://zaazu.com/128-bday01-fem-copy-bday-birthday-cake-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000128-medium.gif" style="border:none;background:none;" alt="Happy-Birthday" /></a>',
':Happy-Birthday:' => '<a href="http://zaazu.com/129-bday02-copy-bday-birthday-gift-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000129-medium.gif" style="border:none;background:none;" alt="Happy-Birthday" /></a>',
':Happy-Birthday:' => '<a href="http://zaazu.com/130-bday03-copy-bday-birthday-party-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000130-medium.gif" style="border:none;background:none;" alt="Happy-Birthday" /></a>',
':Devil:' => '<a href="http://zaazu.com/132-devil-devil-monster-evil-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000132-medium.gif" style="border:none;background:none;" alt="Devil" /></a>',
':Afraid:' => '<a href="http://zaazu.com/138-afraid-male-afraid-frightened-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000138-medium.gif" style="border:none;background:none;" alt="Afraid" /></a>',
':Hi:' => '<a href="http://zaazu.com/154-hi-fem-hi-hello-female-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000154-medium.gif" style="border:none;background:none;" alt="Hi" /></a>',
':Slam-Dunk:' => '<a href="http://zaazu.com/171-basketball-basketball-sports-espn-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000171-medium.gif" style="border:none;background:none;" alt="Slam-Dunk" /></a>',
':Beer:' => '<a href="http://zaazu.com/175-beer-cheers-beer-male-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000175-medium.gif" style="border:none;background:none;" alt="Beer" /></a>',
':Cool:' => '<a href="http://zaazu.com/177-shades-shades-cool-summer-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000177-medium.gif" style="border:none;background:none;" alt="Cool" /></a>',
':Smile:' => '<a href="http://zaazu.com/178-smile01-happy-smiley-smile-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000178-medium.gif" style="border:none;background:none;" alt="Smile" /></a>',
':Devilish:' => '<a href="http://zaazu.com/180-smile03-smiley-smile-male-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000180-medium.gif" style="border:none;background:none;" alt="Devilish" /></a>',
':Cheers:' => '<a href="http://zaazu.com/183-cheers-cheers-champagne-wine-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000183-medium.gif" style="border:none;background:none;" alt="Cheers" /></a>',
':Crazy:' => '<a href="http://zaazu.com/187-crazy-crazy-mad-straight-jacket-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000187-medium.gif" style="border:none;background:none;" alt="Crazy" /></a>',
':Beaten-up:' => '<a href="http://zaazu.com/188-beaten-up-beaten-up-beaten-hit-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000188-medium.gif" style="border:none;background:none;" alt="Beaten-up" /></a>',
':Bully:' => '<a href="http://zaazu.com/195-bully-animated-animate-bully-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000195-medium.gif" style="border:none;background:none;" alt="Bully" /></a>',
':Geek:' => '<a href="http://zaazu.com/200-geek01-geek-nerds-eyeglass-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000200-medium.gif" style="border:none;background:none;" alt="Geek" /></a>',
':Geek:' => '<a href="http://zaazu.com/201-geek02-geek-nerds-eyeglass-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000201-medium.gif" style="border:none;background:none;" alt="Geek" /></a>',
':Geek-Girl:' => '<a href="http://zaazu.com/202-geek03-geek-nerds-eyeglass-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000202-medium.gif" style="border:none;background:none;" alt="Geek-Girl" /></a>',
':Elvis:' => '<a href="http://zaazu.com/203-elvis-elvis-cool-hair-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000203-medium.gif" style="border:none;background:none;" alt="Elvis" /></a>',
':Caveman:' => '<a href="http://zaazu.com/204-caveman-caveman-cave-dweller-prehistoric-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000204-medium.gif" style="border:none;background:none;" alt="Caveman" /></a>',
':Woodstock:' => '<a href="http://zaazu.com/209-Woodstock-woodstock-male-happy-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000209-medium.gif" style="border:none;background:none;" alt="Woodstock" /></a>',
':Hairstylist:' => '<a href="http://zaazu.com/246-parlor-female-girl-parlor-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000246-medium.gif" style="border:none;background:none;" alt="Hairstylist" /></a>',
':Aerobics:' => '<a href="http://zaazu.com/248-aerobics-aerobics-gym-exercise-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000248-medium.gif" style="border:none;background:none;" alt="Aerobics" /></a>',
':Congratulations:' => '<a href="http://zaazu.com/266-congrats02-congrats-congratulations-happy-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000266-medium.gif" style="border:none;background:none;" alt="Congratulations" /></a>',
':I-Wish:' => '<a href="http://zaazu.com/268-iwish-i-wish-wish-hope-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000268-medium.gif" style="border:none;background:none;" alt="I-Wish" /></a>',
':Yes-Sir:' => '<a href="http://zaazu.com/270-soldier-anim-desert-storm-soldier-war-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000270-medium.gif" style="border:none;background:none;" alt="Yes-Sir" /></a>',
':I-got-an-idea:' => '<a href="http://zaazu.com/274-idea-idea-animated-animation-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000274-medium.gif" style="border:none;background:none;" alt="I-got-an-idea" /></a>',
':I-m-Bored:' => '<a href="http://zaazu.com/275-bored-anim-bored-waiting-girl-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000275-medium.gif" style="border:none;background:none;" alt="I-m-Bored" /></a>',
':Cry:' => '<a href="http://zaazu.com/276-cry2-male-cry-tears-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000276-medium.gif" style="border:none;background:none;" alt="Cry" /></a>',
':Princess:' => '<a href="http://zaazu.com/277-princess-anim-princess-animated-animation-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000277-medium.gif" style="border:none;background:none;" alt="Princess" /></a>',
':Angel:' => '<a href="http://zaazu.com/278-Angel-male-bird-smiley-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000278-medium.gif" style="border:none;background:none;" alt="Angel" /></a>',
':THANK-YOU:' => '<a href="http://zaazu.com/280-thankyou-thank-you-thanks-ty-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000280-medium.gif" style="border:none;background:none;" alt="THANK-YOU" /></a>',
':Bye:' => '<a href="http://zaazu.com/291-bye-bye-male-smiley-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000291-medium.gif" style="border:none;background:none;" alt="Bye" /></a>',
':Birthday-Boy:' => '<a href="http://zaazu.com/292-bday01b-bday-birthday-cake-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000292-medium.gif" style="border:none;background:none;" alt="Birthday-Boy" /></a>',
':Afraid:' => '<a href="http://zaazu.com/293-afraid-male-afraid-frightened-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000293-medium.gif" style="border:none;background:none;" alt="Afraid" /></a>',
':Daze:' => '<a href="http://zaazu.com/296-daze-male-cross-eye-dizzy-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000296-medium.gif" style="border:none;background:none;" alt="Daze" /></a>',
':New-Arrival--Baby-Boy:' => '<a href="http://zaazu.com/301-newarrival-baby-new-arrival-congrats-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000301-medium.gif" style="border:none;background:none;" alt="New-Arrival--Baby-Boy" /></a>',
':Congratulations--Baby-Girl:' => '<a href="http://zaazu.com/302-newpassenger-baby-new-passenger-congrats-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000302-medium.gif" style="border:none;background:none;" alt="Congratulations--Baby-Girl" /></a>',
':Hello:' => '<a href="http://zaazu.com/317-hello-hello-telephone-phone-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000317-medium.gif" style="border:none;background:none;" alt="Hello" /></a>',
':Please:' => '<a href="http://zaazu.com/319-please-please-boy-sad-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000319-medium.gif" style="border:none;background:none;" alt="Please" /></a>',
':Please:' => '<a href="http://zaazu.com/320-please-fem-please-girl-request-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000320-medium.gif" style="border:none;background:none;" alt="Please" /></a>',
':You-re-HOT:' => '<a href="http://zaazu.com/321-yourehot2-youre-hot-hot-male-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000321-medium.gif" style="border:none;background:none;" alt="You-re-HOT" /></a>',
':Cool:' => '<a href="http://zaazu.com/322-cool-cool-shades-composure-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000322-medium.gif" style="border:none;background:none;" alt="Cool" /></a>',
':In-pain:' => '<a href="http://zaazu.com/336-pain-pain-ache-headache-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000336-medium.gif" style="border:none;background:none;" alt="In-pain" /></a>',
':Thinking:' => '<a href="http://zaazu.com/339-thinking-idea-animated-animation-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000339-medium.gif" style="border:none;background:none;" alt="Thinking" /></a>',
':Tounge-Out:' => '<a href="http://zaazu.com/343-tounge-animated-animation-boy-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000343-medium.gif" style="border:none;background:none;" alt="Tounge-Out" /></a>',
':Ssshh:' => '<a href="http://zaazu.com/358-ssshh-ssshh-animated-animation-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000358-medium.gif" style="border:none;background:none;" alt="Ssshh" /></a>',
':Liar:' => '<a href="http://zaazu.com/361-liar-animated-animation-liar-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000361-medium.gif" style="border:none;background:none;" alt="Liar" /></a>',
':Happy-Grin:' => '<a href="http://zaazu.com/986-Happy-Grin-Happy-Grin-smile-teeth-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000986-medium.gif" style="border:none;background:none;" alt="Happy-Grin" /></a>',
':Crazy-Tounge:' => '<a href="http://zaazu.com/987-Crazy-Tounge-Crazy-Tounge-cross-eye-mad-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000987-medium.gif" style="border:none;background:none;" alt="Crazy-Tounge" /></a>',
':Censored:' => '<a href="http://zaazu.com/988-Censored-Censored-bad-words-cursed-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000988-medium.gif" style="border:none;background:none;" alt="Censored" /></a>',
':Crying:' => '<a href="http://zaazu.com/990-Crying-Crying-cry-tears-wordpress.html" target="_blank"><img src="'.$ZEUrl.'000990-medium.gif" style="border:none;background:none;" alt="Crying" /></a>',

':Luigi:' => '<a href="http://zaazu.com/1093-Luigi-Luigi-Super-Mario-Bros-video-game.html" target="_blank"><img src="'.$ZEUrl.'001093-medium.gif" style="border:none;background:none;" alt="Luigi Super Mario Bros" /></a>',
':Mario:' => '<a href="http://zaazu.com/1092-Super-Mario-smiley-Super-Mario-Bros-super-mario-smiley-mario-emoticon.html" target="_blank"><img src="'.$ZEUrl.'001092-medium.gif" style="border:none;background:none;" alt="Mario Super Mario Bros" /></a>',
':Optimus-Prime:' => '<a href="http://zaazu.com/1088-Optimus-Prime-Optimus-Prime-transformers-autobots.html" target="_blank"><img src="'.$ZEUrl.'001088-medium.gif" style="border:none;background:none;" alt="Optimus Prime" /></a>',
':Megatron:' => '<a href="http://zaazu.com/1089-Megatron-Megatron-transformers-decepticons.html" target="_blank"><img src="'.$ZEUrl.'001089-medium.gif" style="border:none;background:none;" alt="Megatron" /></a>',
':Police:' => '<a href="http://zaazu.com/1085-Police-police-officer-uniform.html" target="_blank"><img src="'.$ZEUrl.'001085-medium.gif" style="border:none;background:none;" alt="Police" /></a>',
':Felon:' => '<a href="http://zaazu.com/1086-Felon-felon-criminal-crime.html" target="_blank"><img src="'.$ZEUrl.'001086-medium.gif" style="border:none;background:none;" alt="Felon" /></a>',
':Green-Lantern:' => '<a href="http://zaazu.com/1057-Green-Lantern-Smiley-Green-Lantern-superhero-green-lantern-smiley.html" target="_blank"><img src="'.$ZEUrl.'001057-medium.gif" style="border:none;background:none;" alt="Green Lantern Smiley" /></a>',
':Jack-Sparrow:' => '<a href="http://zaazu.com/1049-Jack-Sparrow-jack-sparrow-pirate-caribbean.html" target="_blank"><img src="'.$ZEUrl.'001049-medium.gif" style="border:none;background:none;" alt="Jack Sparrow" /></a>',

':iPhone:' => '<a href="http://zaazu.com/1191-iphone-iphone-apple-phone.html" target="_blank"><img src="'.$ZEUrl.'001191-medium.gif" style="border:none;background:none;" alt="iPhone" /></a>',
':iPad:' => '<a href="http://zaazu.com/1192-ipad-ipad-apple-tablet.html" target="_blank"><img src="'.$ZEUrl.'001192-medium.gif" style="border:none;background:none;" alt="iPad" /></a>',
':Doctor:' => '<a href="http://zaazu.com/1099-Doctor-doctor-hospital-physician.html" target="_blank"><img src="'.$ZEUrl.'001099-medium.gif" style="border:none;background:none;" alt="Doctor" /></a>',
':Sad-Lonely:' => '<a href="http://zaazu.com/1036-Sad-sad-lonely-unhappy.html" target="_blank"><img src="'.$ZEUrl.'001036-medium.gif" style="border:none;background:none;" alt="Sad&Lonely" /></a>',
':Crazy-Mad:' => '<a href="http://zaazu.com/1037-Crazy-crazy-mad-insane.html" target="_blank"><img src="'.$ZEUrl.'001037-medium.gif" style="border:none;background:none;" alt="Crazy" /></a>',
':Be-Happy:' => '<a href="http://zaazu.com/1039-Be-Happy-happy-lol-laugh.html" target="_blank"><img src="'.$ZEUrl.'001039-medium.gif" style="border:none;background:none;" alt="Be Happy" /></a>',
':Superman:' => '<a href="http://zaazu.com/1040-Superman-Superman-man-of-steel-Clark-Kent.html" target="_blank"><img src="'.$ZEUrl.'001040-medium.gif" style="border:none;background:none;" alt="Superman" /></a>',
);

$ZESmileys	= array(
':Wink:' => '<img src="'.$ZEUrl.'000041-medium.gif" style="border:none;background:none;" alt="Wink" />',
':Happy:' => '<img src="'.$ZEUrl.'000042-medium.gif" style="border:none;background:none;" alt="Happy" />',
':Happy-Grin:' => '<img src="'.$ZEUrl.'000043-medium.gif" style="border:none;background:none;" alt="Happy-Grin" />',
':Wink:' => '<img src="'.$ZEUrl.'000044-medium.gif" style="border:none;background:none;" alt="Wink" />',
':Pleasure:' => '<img src="'.$ZEUrl.'000045-medium.gif" style="border:none;background:none;" alt="Pleasure" />',
':Delicious:' => '<img src="'.$ZEUrl.'000046-medium.gif" style="border:none;background:none;" alt="Delicious" />',
':Tounge-Out:' => '<img src="'.$ZEUrl.'000047-medium.gif" style="border:none;background:none;" alt="Tounge-Out" />',
':Delighted:' => '<img src="'.$ZEUrl.'000048-medium.gif" style="border:none;background:none;" alt="Delighted" />',
':Worry:' => '<img src="'.$ZEUrl.'000049-medium.gif" style="border:none;background:none;" alt="Worry" />',
':Overjoy:' => '<img src="'.$ZEUrl.'000050-medium.gif" style="border:none;background:none;" alt="Overjoy" />',
':Pondering:' => '<img src="'.$ZEUrl.'000051-medium.gif" style="border:none;background:none;" alt="Pondering" />',
':Weary:' => '<img src="'.$ZEUrl.'000052-medium.gif" style="border:none;background:none;" alt="Weary" />',
':Amazed:' => '<img src="'.$ZEUrl.'000054-medium.gif" style="border:none;background:none;" alt="Amazed" />',
':Angry:' => '<img src="'.$ZEUrl.'000057-medium.gif" style="border:none;background:none;" alt="Angry" />',
':Disapproval:' => '<img src="'.$ZEUrl.'000059-medium.gif" style="border:none;background:none;" alt="Disapproval" />',
':Conceited:' => '<img src="'.$ZEUrl.'000060-medium.gif" style="border:none;background:none;" alt="Conceited" />',
':Cry-Out:' => '<img src="'.$ZEUrl.'000061-medium.gif" style="border:none;background:none;" alt="Cry-Out" />',
':I-see-stars:' => '<img src="'.$ZEUrl.'000062-medium.gif" style="border:none;background:none;" alt="I-see-stars" />',
':Tears:' => '<img src="'.$ZEUrl.'000063-medium.gif" style="border:none;background:none;" alt="Tears" />',
':Cry:' => '<img src="'.$ZEUrl.'000064-medium.gif" style="border:none;background:none;" alt="Cry" />',
':Tired:' => '<img src="'.$ZEUrl.'000065-medium.gif" style="border:none;background:none;" alt="Tired" />',
':Shout:' => '<img src="'.$ZEUrl.'000066-medium.gif" style="border:none;background:none;" alt="Shout" />',
':Sick:' => '<img src="'.$ZEUrl.'000067-medium.gif" style="border:none;background:none;" alt="Sick" />',
':In-Love:' => '<img src="'.$ZEUrl.'000992-medium.gif" style="border:none;background:none;" alt="In Love" />',
':Crazy2:' => '<img src="'.$ZEUrl.'001037-medium.gif" style="border:none;background:none;" alt="Crazy" />',
':Distort:' => '<img src="'.$ZEUrl.'001038-medium.gif" style="border:none;background:none;" alt="Distort" />',
':Star-Struck:' => '<img src="'.$ZEUrl.'000993-medium.gif" style="border:none;background:none;" alt="Star Struck" />',
':Who-s-the-man:' => '<img src="'.$ZEUrl.'000068-medium.gif" style="border:none;background:none;" alt="Who-s-the-man" />',
':Zzzzzz:' => '<img src="'.$ZEUrl.'000069-medium.gif" style="border:none;background:none;" alt="Zzzzzz" />',
':I-m-in-love:' => '<img src="'.$ZEUrl.'000070-medium.gif" style="border:none;background:none;" alt="I-m-in-love" />',
':Movie-Time:' => '<img src="'.$ZEUrl.'000071-medium.gif" style="border:none;background:none;" alt="Movie-Time" />',
':Sad:' => '<img src="'.$ZEUrl.'000072-medium.gif" style="border:none;background:none;" alt="Sad" />',
':Whistling:' => '<img src="'.$ZEUrl.'000073-medium.gif" style="border:none;background:none;" alt="Whistling" />',
':Approve:' => '<img src="'.$ZEUrl.'000074-medium.gif" style="border:none;background:none;" alt="Approve" />',
':Angel:' => '<img src="'.$ZEUrl.'000076-medium.gif" style="border:none;background:none;" alt="Angel" />',
':The-Incredible-Hulk:' => '<img src="'.$ZEUrl.'000077-medium.gif" style="border:none;background:none;" alt="The-Incredible-Hulk" />',
':Girl-Teasing:' => '<img src="'.$ZEUrl.'000081-medium.gif" style="border:none;background:none;" alt="Girl-Teasing" />',
':Mad:' => '<img src="'.$ZEUrl.'000099-medium.gif" style="border:none;background:none;" alt="Mad" />',
':Heart-Chocolate-Gift:' => '<img src="'.$ZEUrl.'000106-medium.gif" style="border:none;background:none;" alt="Heart-Chocolate-Gift" />',
':All-I-See-is-Love:' => '<img src="'.$ZEUrl.'000108-medium.gif" style="border:none;background:none;" alt="All-I-See-is-Love" />',
':Love-Gift:' => '<img src="'.$ZEUrl.'000110-medium.gif" style="border:none;background:none;" alt="Love-Gift" />',
':Valentine-s-Day:' => '<img src="'.$ZEUrl.'000113-medium.gif" style="border:none;background:none;" alt="Valentine-s-Day" />',
':Love-Letter:' => '<img src="'.$ZEUrl.'000115-medium.gif" style="border:none;background:none;" alt="Love-Letter" />',
':i-heart-us:' => '<img src="'.$ZEUrl.'000116-medium.gif" style="border:none;background:none;" alt="i-heart-us" />',
':Valentine-Kiss:' => '<img src="'.$ZEUrl.'000117-medium.gif" style="border:none;background:none;" alt="Valentine-Kiss" />',
':Heartbeat:' => '<img src="'.$ZEUrl.'000118-medium.gif" style="border:none;background:none;" alt="Heartbeat" />',
':Heart:' => '<img src="'.$ZEUrl.'000119-medium.gif" style="border:none;background:none;" alt="Heart" />',
':Flowers-for-you:' => '<img src="'.$ZEUrl.'000120-medium.gif" style="border:none;background:none;" alt="Flowers-for-you" />',
':Roses-are-red:' => '<img src="'.$ZEUrl.'000121-medium.gif" style="border:none;background:none;" alt="Roses-are-red" />',
':Valentine-s-Day:' => '<img src="'.$ZEUrl.'000122-medium.gif" style="border:none;background:none;" alt="Valentine-s-Day" />',
':Be-Mine:' => '<img src="'.$ZEUrl.'000125-medium.gif" style="border:none;background:none;" alt="Be-Mine" />',
':Make-A-Birthday-Wish:' => '<img src="'.$ZEUrl.'000127-medium.gif" style="border:none;background:none;" alt="Make-A-Birthday-Wish" />',
':Happy-Birthday1:' => '<img src="'.$ZEUrl.'000128-medium.gif" style="border:none;background:none;" alt="Happy-Birthday" />',
':Happy-Birthday2:' => '<img src="'.$ZEUrl.'000129-medium.gif" style="border:none;background:none;" alt="Happy-Birthday" />',
':Happy-Birthday3:' => '<img src="'.$ZEUrl.'000130-medium.gif" style="border:none;background:none;" alt="Happy-Birthday" />',
':Devil:' => '<img src="'.$ZEUrl.'000132-medium.gif" style="border:none;background:none;" alt="Devil" />',
':Afraid:' => '<img src="'.$ZEUrl.'000138-medium.gif" style="border:none;background:none;" alt="Afraid" />',
':Hi:' => '<img src="'.$ZEUrl.'000154-medium.gif" style="border:none;background:none;" alt="Hi" />',
':Slam-Dunk:' => '<img src="'.$ZEUrl.'000171-medium.gif" style="border:none;background:none;" alt="Slam-Dunk" />',
':Beer:' => '<img src="'.$ZEUrl.'000175-medium.gif" style="border:none;background:none;" alt="Beer" />',
':Cool:' => '<img src="'.$ZEUrl.'000177-medium.gif" style="border:none;background:none;" alt="Cool" />',
':Smile:' => '<img src="'.$ZEUrl.'000178-medium.gif" style="border:none;background:none;" alt="Smile" />',
':Devilish:' => '<img src="'.$ZEUrl.'000180-medium.gif" style="border:none;background:none;" alt="Devilish" />',
':Cheers:' => '<img src="'.$ZEUrl.'000183-medium.gif" style="border:none;background:none;" alt="Cheers" />',
':Crazy:' => '<img src="'.$ZEUrl.'000187-medium.gif" style="border:none;background:none;" alt="Crazy" />',
':Beaten-up:' => '<img src="'.$ZEUrl.'000188-medium.gif" style="border:none;background:none;" alt="Beaten-up" />',
':Bully:' => '<img src="'.$ZEUrl.'000195-medium.gif" style="border:none;background:none;" alt="Bully" />',
':Geek:' => '<img src="'.$ZEUrl.'000200-medium.gif" style="border:none;background:none;" alt="Geek" />',
':Geek:' => '<img src="'.$ZEUrl.'000201-medium.gif" style="border:none;background:none;" alt="Geek" />',
':Geek-Girl:' => '<img src="'.$ZEUrl.'000202-medium.gif" style="border:none;background:none;" alt="Geek-Girl" />',
':Elvis:' => '<img src="'.$ZEUrl.'000203-medium.gif" style="border:none;background:none;" alt="Elvis" />',
':Caveman:' => '<img src="'.$ZEUrl.'000204-medium.gif" style="border:none;background:none;" alt="Caveman" />',
':Woodstock:' => '<img src="'.$ZEUrl.'000209-medium.gif" style="border:none;background:none;" alt="Woodstock" />',
':Hairstylist:' => '<img src="'.$ZEUrl.'000246-medium.gif" style="border:none;background:none;" alt="Hairstylist" />',
':Aerobics:' => '<img src="'.$ZEUrl.'000248-medium.gif" style="border:none;background:none;" alt="Aerobics" />',
':Congratulations:' => '<img src="'.$ZEUrl.'000266-medium.gif" style="border:none;background:none;" alt="Congratulations" />',
':I-Wish:' => '<img src="'.$ZEUrl.'000268-medium.gif" style="border:none;background:none;" alt="I-Wish" />',
':Yes-Sir:' => '<img src="'.$ZEUrl.'000270-medium.gif" style="border:none;background:none;" alt="Yes-Sir" />',
':I-got-an-idea:' => '<img src="'.$ZEUrl.'000274-medium.gif" style="border:none;background:none;" alt="I-got-an-idea" />',
':I-m-Bored:' => '<img src="'.$ZEUrl.'000275-medium.gif" style="border:none;background:none;" alt="I-m-Bored" />',
':Cry:' => '<img src="'.$ZEUrl.'000276-medium.gif" style="border:none;background:none;" alt="Cry" />',
':Princess:' => '<img src="'.$ZEUrl.'000277-medium.gif" style="border:none;background:none;" alt="Princess" />',
':Angel:' => '<img src="'.$ZEUrl.'000278-medium.gif" style="border:none;background:none;" alt="Angel" />',
':THANK-YOU:' => '<img src="'.$ZEUrl.'000280-medium.gif" style="border:none;background:none;" alt="THANK-YOU" />',
':Bye:' => '<img src="'.$ZEUrl.'000291-medium.gif" style="border:none;background:none;" alt="Bye" />',
':Birthday-Boy:' => '<img src="'.$ZEUrl.'000292-medium.gif" style="border:none;background:none;" alt="Birthday-Boy" />',
':Afraid:' => '<img src="'.$ZEUrl.'000293-medium.gif" style="border:none;background:none;" alt="Afraid" />',
':Daze:' => '<img src="'.$ZEUrl.'000296-medium.gif" style="border:none;background:none;" alt="Daze" />',
':New-Arrival--Baby-Boy:' => '<img src="'.$ZEUrl.'000301-medium.gif" style="border:none;background:none;" alt="New-Arrival--Baby-Boy" />',
':Congratulations--Baby-Girl:' => '<img src="'.$ZEUrl.'000302-medium.gif" style="border:none;background:none;" alt="Congratulations--Baby-Girl" />',
':Hello:' => '<img src="'.$ZEUrl.'000317-medium.gif" style="border:none;background:none;" alt="Hello" />',
':Please:' => '<img src="'.$ZEUrl.'000319-medium.gif" style="border:none;background:none;" alt="Please" />',
':Please:' => '<img src="'.$ZEUrl.'000320-medium.gif" style="border:none;background:none;" alt="Please" />',
':You-re-HOT:' => '<img src="'.$ZEUrl.'000321-medium.gif" style="border:none;background:none;" alt="You-re-HOT" />',
':Cool:' => '<img src="'.$ZEUrl.'000322-medium.gif" style="border:none;background:none;" alt="Cool" />',
':In-pain:' => '<img src="'.$ZEUrl.'000336-medium.gif" style="border:none;background:none;" alt="In-pain" />',
':Thinking:' => '<img src="'.$ZEUrl.'000339-medium.gif" style="border:none;background:none;" alt="Thinking" />',
':Tounge-Out:' => '<img src="'.$ZEUrl.'000343-medium.gif" style="border:none;background:none;" alt="Tounge-Out" />',
':Ssshh:' => '<img src="'.$ZEUrl.'000358-medium.gif" style="border:none;background:none;" alt="Ssshh" />',
':Liar:' => '<img src="'.$ZEUrl.'000361-medium.gif" style="border:none;background:none;" alt="Liar" />',
':Happy-Grin:' => '<img src="'.$ZEUrl.'000986-medium.gif" style="border:none;background:none;" alt="Happy-Grin" />',
':Crazy-Tounge:' => '<img src="'.$ZEUrl.'000987-medium.gif" style="border:none;background:none;" alt="Crazy-Tounge" />',
':Censored:' => '<img src="'.$ZEUrl.'000988-medium.gif" style="border:none;background:none;" alt="Censored" />',
':Crying:' => '<img src="'.$ZEUrl.'000990-medium.gif" style="border:none;background:none;" alt="Crying" />',

':Luigi:' => '<img src="'.$ZEUrl.'001093-medium.gif" style="border:none;background:none;" alt="Luigi Super Mario Bros" />',
':Mario:' => '<img src="'.$ZEUrl.'001092-medium.gif" style="border:none;background:none;" alt="Mario Super Mario Bros" />',
':Optimus-Prime:' => '<img src="'.$ZEUrl.'001088-medium.gif" style="border:none;background:none;" alt="Optimus Prime" />',
':Megatron:' => '<img src="'.$ZEUrl.'001089-medium.gif" style="border:none;background:none;" alt="Megatron" />',
':Police:' => '<img src="'.$ZEUrl.'001085-medium.gif" style="border:none;background:none;" alt="Police" />',
':Felon:' => '<img src="'.$ZEUrl.'001086-medium.gif" style="border:none;background:none;" alt="Felon" />',
':Green-Lantern:' => '<img src="'.$ZEUrl.'001057-medium.gif" style="border:none;background:none;" alt="Green Lantern Smiley" />',
':Jack-Sparrow:' => '<img src="'.$ZEUrl.'001049-medium.gif" style="border:none;background:none;" alt="Jack Sparrow" />',

':iPhone:' => '<img src="'.$ZEUrl.'001191-medium.gif" style="border:none;background:none;" alt="iPhone" />',
':iPad:' => '<img src="'.$ZEUrl.'001192-medium.gif" style="border:none;background:none;" alt="iPad" />',
':Doctor:' => '<img src="'.$ZEUrl.'001099-medium.gif" style="border:none;background:none;" alt="Doctor" />',
':Sad-Lonely:' => '<img src="'.$ZEUrl.'001036-medium.gif" style="border:none;background:none;" alt="Sad&Lonely" />',
':Crazy-Mad:' => '<img src="'.$ZEUrl.'001037-medium.gif" style="border:none;background:none;" alt="Crazy" />',
':Be-Happy:' => '<img src="'.$ZEUrl.'001039-medium.gif" style="border:none;background:none;" alt="Be Happy" />',
':Superman:' => '<img src="'.$ZEUrl.'001040-medium.gif" style="border:none;background:none;" alt="Superman" />',
);

$ZEReplace2 = $ZEReplace;
if(isset($opt['stat'])){
	foreach($opt['stat'] as $k=>$v){
		$ZEReplace[$k]="";
		$ZESmileys[$k]="";
	}
}
?>