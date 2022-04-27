<?php 


/*

 Le hook : 'customize_register' qui sera utilisé dans le l'écouteur add_action()
  La fonction de rappel : function(WP_Customizer_Manager, $manager)
  La méthode add_section( id de la section,
                           [
                               "title" => "Le titre de la section"
                           ]);
  La méthode add_setting ( Le nom de la variable php qui sera utilisée dans notre thème,
                            [   "default" => la valeur par défaut de la variable,
                                "sanitize_callback"=> "sanitize_hex_color" // permet de valider/filtrer la donnée
                            ]);   
 
  La méthode add_control ( le nom de la variable php qui sera utilisé dans notre thème,
                            ["section"=> le ID de la section,
                             "setting"=> le nom de la variable,
                             "label"=> l'étiquette de la variable dans le formulaire 
                             ])                          
 
  Pour utiliser une interface de couleur plus complexe on peut utiliser 
  La méthode add_control (new WP_Customize_Color_Control($manager, le nom de la variable php,
                        ["section"=>"le ID de la section",
                        "label"=>l'étiquette de la variable dans le formulaire  ]));
*/




/*

add_action("customize_register", function(WP_Customize_Manager $manager){

    $manager->add_section("modifier_background_body",[
        "title"=>"modifier le background du body"
    ]);
    $manager->add_setting("background_body", [
        "default"=>"#ffffff",
        "sanitize_callback"=>"sanitize_hex_color"
    ]);
    $manager->add_control("background_body", [
        "section"=>"modifier_background_body",
        "setting"=>"background_body",
        "label"=>"Couleur du fond de la page"
    ]);

});


*/

add_action("customize_register", function(WP_Customize_Manager $manager){

    // changer BG-color
    $manager->add_section("modifier_background_body",[
        "title"=>"modifier le background du body"
    ]);
    $manager->add_setting("background_body", [
        "default"=>"#ffffff",
        "sanitize_callback"=>"sanitize_hex_color"
    ]);
    $manager->add_control(new WP_Customize_Color_Control($manager, "background_body",[
        "section"=>"modifier_background_body",
        "label"=>"Couleur du fond de la page"
    ]));
    
    // changer font-color
    $manager->add_section("modifier_font_color",[
        "title"=>"modifier la couleur du texte"
    ]);
    $manager->add_setting("font_color", [
        "default"=>"#ffffff",
        "sanitize_callback"=>"sanitize_hex_color"
    ]);
    $manager->add_control(new WP_Customize_Color_Control($manager, "font_color",[
        "section"=>"modifier_font_color",
        "label"=>"Couleur du texte"
    ]));

    // changer font
    $manager->add_section("modifier_font",[
        "title"=>"modifier la police de caractère du texte"
    ]);
    $manager->add_setting("font", [
        "default"=>"Arial",
    ]);
    $manager->add_control("font", [
        "section"=>"modifier_font",
        "setting"=>"font",
        "label"=>"Police de caractères"
    ]);

     // changer clipPath
     $manager->add_section("modifier_clipPath_color",[
        "title"=>"modifier la couleur du clipPath"
    ]);
    $manager->add_setting("clipPath_color", [
        "default"=>"#ffffff",
        "sanitize_callback"=>"sanitize_hex_color"
    ]);
    $manager->add_control(new WP_Customize_Color_Control($manager, "clipPath_color",[
        "section"=>"modifier_clipPath_color",
        "label"=>"Couleur du clipPath"
    ]));

});


?>