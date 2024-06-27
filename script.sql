-- This script was generated by the ERD tool in pgAdmin 4.
-- Please log an issue at https://github.com/pgadmin-org/pgadmin4/issues/new/choose if you find any bugs, including reproduction steps.
BEGIN;


CREATE TABLE IF NOT EXISTS public.tickets
(
    ticket_id serial NOT NULL,
    internal character varying(3) COLLATE pg_catalog."default" NOT NULL,
    status character varying(255) COLLATE pg_catalog."default" NOT NULL,
    type character varying(255) COLLATE pg_catalog."default" NOT NULL,
    franchise character varying(255) COLLATE pg_catalog."default" NOT NULL,
    company character varying(255) COLLATE pg_catalog."default" NOT NULL,
    request_for character varying(255) COLLATE pg_catalog."default" NOT NULL,
    request_by character varying(255) COLLATE pg_catalog."default" NOT NULL,
    assigned_to character varying(255) COLLATE pg_catalog."default" NOT NULL,
    subject character varying(255) COLLATE pg_catalog."default" NOT NULL,
    ticket_start character varying(255) COLLATE pg_catalog."default" NOT NULL,
    work_time character varying(255) COLLATE pg_catalog."default" NOT NULL,
    remaining_time character varying(255) COLLATE pg_catalog."default" NOT NULL,
    last_modified character varying(255) COLLATE pg_catalog."default" NOT NULL,
    last_modified_by character varying(255) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT tickets_pkey PRIMARY KEY (ticket_id)
);

CREATE TABLE IF NOT EXISTS public.user_details
(
    user_details_id serial NOT NULL,
    name character varying(255) COLLATE pg_catalog."default" NOT NULL,
    surname character varying(255) COLLATE pg_catalog."default" NOT NULL,
    email character varying(255) COLLATE pg_catalog."default" NOT NULL,
    phone character varying(255) COLLATE pg_catalog."default" NOT NULL,
    notes character varying(255) COLLATE pg_catalog."default" NOT NULL,
    suspended character varying(3) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT user_details_pkey PRIMARY KEY (user_details_id)
);

CREATE TABLE IF NOT EXISTS public.users
(
    user_id serial NOT NULL,
    username character varying(255) COLLATE pg_catalog."default" NOT NULL,
    password character varying(255) COLLATE pg_catalog."default" NOT NULL,
    user_details_id integer,
    CONSTRAINT users_pkey PRIMARY KEY (user_id)
);

ALTER TABLE IF EXISTS public.users
    ADD CONSTRAINT users_user_details_id_fkey FOREIGN KEY (user_details_id)
    REFERENCES public.user_details (user_details_id) MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION;

END;