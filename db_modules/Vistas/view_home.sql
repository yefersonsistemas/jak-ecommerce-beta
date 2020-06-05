CREATE OR REPLACE VIEW public.view_home AS 
 SELECT tbl_home."imgNewArrival",
    tbl_home."imgTopPicks",
    "tbl_webConfiguration".title
   FROM tbl_home 
   LEFT JOIN "tbl_webConfiguration" ON tbl_home."webConfigCode"::text = "tbl_webConfiguration".code::text