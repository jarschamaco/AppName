-- Table: public.user_table

-- DROP TABLE public.user_table;


CREATE TABLE public.user_table
(
    email text COLLATE pg_catalog."default" NOT NULL,
    id text COLLATE pg_catalog."default" NOT NULL,
    name text COLLATE pg_catalog."default" NOT NULL,
    password text COLLATE pg_catalog."default" NOT NULL,
    type text COLLATE pg_catalog."default" NOT NULL,
    rango text COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT user_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE public.user_table
    OWNER to postgres;
	
	select * from user_table;
	INSERT INTO user_table (email, id, name, password, type, rango, image) values ('admin@admin1.com','1','Administrador','1234','Administrador','1',null);