let affichage = document.getElementById("affichage");

for (i = 0; i < 12; i++) {
    affichage.innerHTML += "<div>";
    for (y = 0; y < 4; y++) {
        affichage.innerHTML += "<form style='display: inline-flex;'>\n" +
            "    <select id=\"coulours"+i+"\" name=\"coulours\">\n" +
            "        <option value=\"red\" style=\"background: red;\">red</option>\n" +
            "        <option value=\"yellow\" style=\"background: yellow;\">yellow</option>\n" +
            "        <option value=\"blue\" style=\"background: blue;\">blue</option>\n" +
            "        <option value=\"violet\" style=\"background: blueviolet;\">violet</option>\n" +
            "        <option value=\"green\" style=\"background: green;\">green</option>\n" +
            "    </select>\n" +
            "</form>";
    };
    affichage.innerHTML += "  ";
    for (y = 0; y < 4; y++) {
        affichage.innerHTML += "<form style='display: inline-flex;'>\n" +
            "    <select id=\"coulours_choice"+y+"\" name=\"coulours_choice\">\n" +
            "        <option value=\"white\" style=\"background: white;\">white</option>\n" +
            "        <option value=\"red\" style=\"background:red;\">red</option>\n" +
            "    </select>\n" +
            "</form>";
    };
    affichage.innerHTML += "</div>";
};