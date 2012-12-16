<p>Ici vous pouvez d&eacute;finir des mod&egrave;les qui peuvent &ecirc;tre utilis&eacute;s pour envoyer des messages &agrave; vos listes.  Un mod&egrave;le est une page HTML qui contient un <i>Code-Raccourci</i>: <b>[CONTENT]</b>. C&rsquo;est l&agrave; que sera ins&eacute;r&eacute; le texte de l&rsquo;email. </P>
<p>En plus de [CONTENT], vous pouvez ajouter [FOOTER] (pied-de-page) et [SIGNATURE] pour inclure le pied-de-page et la signature du message, mais ceci est facultatif.</p>
<p>Les images dans votre mod&egrave;le seront incluses dans les emails.  Si vous ajoutez des images au contenu de vos messages (au moment de l&rsquo;envoi), elles doivent contenir l&rsquo;URL complet, et ne seront pas incluses dans l&rsquo;email.</p>
<p><b>Suivi des Utilisateurs</b></p>
<p>Pour faciliter le suivi des utilisateurs, vous pouvez ajouter [USERID] &agrave; votre mod&egrave;le qui sera remplac&eacute; par un identifiant pour chaque utilisateur.  Cette fonctionnalit&eacute; n&rsquo;est disponible que lorsque vous envoyez l&rsquo;email au format HTML.  Vous devrez cr&eacute;er une URL qui pourra accepter l&rsquo;identifiant. Mais vous pouvez aussi utiliser le syst&egrave;me de suivi des utilisateurs pr&eacute;install&eacute; dans <?php echo NAME?>. Pour utiliser ce syst&egrave;me, ajoutez [USERTRACK] &agrave; votre mod&egrave;le et un lien invisible sera ajout&eacute; &agrave; l&rsquo;email pour suivre le nombre de Visites faites &agrave; partir de l&rsquo;email.</p>
<p><b>Images</b></p>
<p>Toute r&eacute;f&eacute;rence &agrave; une image qui ne commence pas par  "http://" peut (doit) &ecirc;tre t&eacute;l&eacute;charg&eacute;e pour pouvoir &ecirc;tre incluse dans votre email.  Il est conseill&eacute; de n&rsquo;utiliser qu&rsquo;un nombre limit&eacute; d&rsquo;images &agrave; taille tr&egrave;s r&eacute;duite. Si vous t&eacute;l&eacute;chargez votre mod&egrave;le, vous pourrez ajouter vos images. Les r&eacute;f&eacute;rences aux images &agrave; inclure doivent renvoyer vers le m&ecirc;me r&eacute;pertoire, ie &lt;img&nbsp;src=&quot;image.jpg&quot;&nbsp;......&nbsp;&gt; et non &lt;img&nbsp;src=&quot;/adresse/quelconque/durepertoire/image.jpg&quot;&nbsp;..........&nbsp;&gt;</p>