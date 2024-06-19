<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Ticket.php';

class TicketRepository extends Repository
{
    public function addTicket(Ticket $ticket)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.tickets (internal, status, type, franchise, company, request_for, request_by, assigned_to, subject, ticket_start, work_time, remaining_time, last_modified, last_modified_by)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $ticket->getInternal(),
            $ticket->getStatus(),
            $ticket->getType(),
            $ticket->getFranchise(),
            $ticket->getCompany(),
            $ticket->getRequestFor(),
            $ticket->getRequestBy(),
            $ticket->getAssignedTo(),
            $ticket->getSubject(),
            $ticket->getTicketStart(),
            $ticket->getWorkTime(),
            $ticket->getRemainingTime(),
            $ticket->getLastModified(),
            $ticket->getLastModifiedBy()
        ]);
    }

    public function getTickets(string $assigned_to): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM tickets WHERE assigned_to = :assigned_to;
        ');
        $stmt->bindParam(':assigned_to', $assigned_to, PDO::PARAM_STR);
        $stmt->execute();
        $tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($tickets as $ticket) {
            $t = new Ticket(
                $ticket['internal'],
                $ticket['status'],
                $ticket['type'],
                $ticket['franchise'],
                $ticket['company'],
                $ticket['request_for'],
                $ticket['request_by'],
                $ticket['assigned_to'],
                $ticket['subject'],
                $ticket['ticket_start'],
                $ticket['work_time'],
                $ticket['remaining_time'],
                $ticket['last_modified'],
                $ticket['last_modified_by']
            );
            $t->setId($ticket['ticket_id']);
            $result[] = $t;
        }
        
        return $result;
    }
}