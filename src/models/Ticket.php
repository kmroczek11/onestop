<?php

class Ticket
{
    private $id;
    private $internal;
    private $status;
    private $type;
    private $franchise;
    private $company;
    private $request_for;
    private $request_by;
    private $assigned_to;
    private $subject;
    private $ticket_start;
    private $work_time;
    private $remaining_time;
    private $last_modified;
    private $last_modified_by;

    public function __construct(
        string $internal,
        string $status,
        string $type,
        string $franchise,
        string $company,
        string $request_for,
        string $request_by,
        string $assigned_to,
        string $subject,
        string $ticket_start,
        string $work_time,
        string $remaining_time,
        string $last_modified,
        string $last_modified_by
    ) {
        $this->internal = $internal;
        $this->status = $status;
        $this->type = $type;
        $this->franchise = $franchise;
        $this->company = $company;
        $this->request_for = $request_for;
        $this->request_by = $request_by;
        $this->assigned_to = $assigned_to;
        $this->subject = $subject;
        $this->ticket_start = $ticket_start;
        $this->work_time = $work_time;
        $this->remaining_time = $remaining_time;
        $this->last_modified = $last_modified;
        $this->last_modified_by = $last_modified_by;
    }

    public function getId(): int{
        return $this->id;
    }

    public function setId($id){
        $this->id= $id;
    }

    public function getInternal(): string
    {
        return $this->internal;
    }
    
    public function getStatus(): string
    {
        return $this->status;
    }
    
    public function getType(): string
    {
        return $this->type;
    }
    
    public function getFranchise(): string
    {
        return $this->franchise;
    }
    
    public function getCompany(): string
    {
        return $this->company;
    }

    public function getRequestFor(): string
    {
        return $this->request_for;
    }

    public function getRequestBy(): string
    {
        return $this->request_by;
    }

    public function getAssignedTo(): string
    {
        return $this->assigned_to;
    }
    
    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getTicketStart(): string
    {
        return $this->ticket_start;
    }

    public function getWorkTime(): string
    {
        return $this->work_time;
    }

    public function getRemainingTime(): string
    {
        return $this->remaining_time;
    }

    public function getLastModified(): string
    {
        return $this->last_modified;
    }

    public function getLastModifiedBy(): string
    {
        return $this->last_modified_by;
    }
}