
-----------------------------------------------------------------------
-- weather
-----------------------------------------------------------------------

DROP TABLE weather CASCADE;

CREATE TABLE weather
(
	city VARCHAR(80),
	temp_lo INTEGER,
	temp_hi INTEGER,
	prcp FLOAT,
	date DATE,
	id serial NOT NULL,
	PRIMARY KEY (id)
);
