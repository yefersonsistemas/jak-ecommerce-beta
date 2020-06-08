CREATE OR REPLACE VIEW public.view_home AS 
 SELECT tbl_home."imgNewArrival" as srcna,
    tbl_home."imgTopPicks" as srctp
   FROM tbl_home 