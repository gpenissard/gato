// Déamarrage JS :
// Mettre en place une mise à jour régulière de la liste des derniers messages
const MESSAGES_REFRESH_PERIOD = 2000; // 1000 ms entre chaques messages

$(function(){
    update_messages();
    setInterval(update_messages, MESSAGES_REFRESH_PERIOD);
});

function update_messages() {
    console.log('Maj des messages par AJAX : Lancement requète GET');
    $.get("ajax/get_messages.php", function(data, status){
        console.log('Réception des données AJAX', data);
        console.log("Status: ", status);
        var data_tb = JSON.parse(data); // Décodage des données
        console.log(data_tb);
        var cont_ul = $('#container_message').children('ul'); // Le ul dans le conteneur des messages
        cont_ul.empty(); // Vider le ul
        $.each(data_tb, function(i,message){
            console.log(message);
            $('<li>')
                .appendTo(cont_ul)
                .append('<p class="username">' + message.username + '</p>')
                .append('<p class="message">' + message.content + '</p>')
        });
    });
}
