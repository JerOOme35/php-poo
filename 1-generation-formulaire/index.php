<?php
include 'Form.php';

// Des variables par défaut pour vos tests.
$lastname = 'Chevert';
$firstname = 'Jerome';
// YOUR CODE HERE

$form = new Form($action, $method);  // créer le début du formulaire
$form->addTextField('Chevert',$lastname); // créer un input de type texte avec comme valeur par défaut $nom
$form->addTextField('Jerome',$firstname); // créer un input de type texte avec comme valeur par défaut $prenom
$form->addSubmitButton('Modifier',$button); //Créer un bouton pour soumettre le formulaire se nommant Modifier

echo $form->build(); // générer le formulaire