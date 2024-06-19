const createTicketButton = document.querySelector(".create-ticket-button");

createTicketButton.addEventListener("click", function (event) {
    window.open("http://localhost:8080/createTicket","_self")
});