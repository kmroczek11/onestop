<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/TicketRepository.php';

class TicketController extends AppController
{

    private $ticketRepository;

    public function __construct()
    {
        parent::__construct();
        $this->ticketRepository = new TicketRepository();
    }

    public function home()
    {
        session_start();
        $tickets = $this->ticketRepository->getTickets($_SESSION["user"]->getName() . " " . $_SESSION["user"]->getSurname());
        $this->render('home', ['tickets' => $tickets]);
    }

    public function addTicket()
    {
        if (!$this->isPost()) {
            return $this->render('createTicket');
        }

        session_start();

        $internal = $_POST['internal'] == "on" ? "Yes" : "-";
        $status = "NEW";
        $type = $_POST['type'];
        $franchise = "-";
        $company = $_POST['company'];
        $request_for = $_POST['request-for'];
        $request_by = $_POST['request-by'];
        $assigned_to = $_POST['assigned-to'];
        $subject = $_POST['subject'];
        $ticket_start = new DateTime();
        $work_time = "00:30";
        $remaining_time = "00:00";
        $last_modified = new DateTime();
        $last_modified_by = $_SESSION["user"]->getName() . " " . $_SESSION["user"]->getSurname();

        $ticket = new Ticket(
            $internal,
            $status,
            $type,
            $franchise,
            $company,
            $request_for,
            $request_by,
            $assigned_to,
            $subject,
            $ticket_start->format('Y-m-d H:i:s'),
            $work_time,
            $remaining_time,
            $last_modified->format('Y-m-d H:i:s'),
            $last_modified_by
        );

        $this->ticketRepository->addTicket($ticket);

        $tickets = $this->ticketRepository->getTickets($_SESSION["user"]->getName() . " " . $_SESSION["user"]->getSurname());
        return $this->render('home', ['tickets' => $tickets]);
    }
}