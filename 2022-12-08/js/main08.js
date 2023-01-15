let originalniText = "  Koala medvídkovitý (Phascolarctos cinereus, Goldfuss, 1817), známý také pod nesprávným označením medvídek koala, je stromový vačnatec žijící v Austrálii.  ";

//délka řetězce
console.log(originalniText.length);

//malá písmena
console.log(originalniText.toLowerCase());

//index kusu textu (nemusíme řešit mb_)
console.log(originalniText.indexOf("med"));

//nahradit text
console.log(originalniText.replace("med", "dad"));

//odstraní mezery
console.log(originalniText.trim());