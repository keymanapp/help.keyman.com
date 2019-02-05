/*(C) Copyright 2017 SIL International. All Rights Reserved. Details: keymanweb.com*/
function KWK_Load(){
    var KWK={
        "devanagari_inscript":{KN:"Devanagari (INSCRIPT)", KLC:"hin", KL:"Hindi"},
        "european2":{KN:"EuroLatin2", KLC:"eng", KL:"English"},
        "hebrew":{KN:"Hebrew", KLC:"heb", KL:"Hebrew"},
        "korean_korda":{KN:"Korean (KORDA) - 30 Day Evaluation", KLC:"kor", KL:"Korean"},
        "korean_morse":{KN:"Korean (Morse) - 30 Day Evaluation", KLC:"kor", KL:"Korean"},
        "laokeys":{KN:"Lao (Phonetic)", KLC:"lao", KL:"Lao"}
    };

    for(var n in KWK) {
        KeymanWeb.KRS({KF:"./js/" + n+".js", KI:"Keyboard_"+n, KN:KWK[n].KN, KL:KWK[n].KL, KLC:KWK[n].KLC});
    }
}

KWK_Load();
