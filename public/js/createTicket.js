const nextButton = document.querySelector(".next-button");
const selectCompanyContainer = document.querySelector(".select-company-container");
const createTicketContainer = document.querySelector(".create-ticket-container");

nextButton.addEventListener("click", function (event) {
    selectCompanyContainer.style.display = "none"
    createTicketContainer.style.display = "flex"

    const h1 = document.querySelector(".create-ticket-container h1")
    const companySelect = document.querySelector('[name="company"]');
    const companySelectValue = companySelect.options[companySelect.selectedIndex].value;
    const companySelectNode = document.createTextNode(companySelectValue)
    h1.appendChild(companySelectNode)
});