CREATE OR REPLACE VIEW public.view_banners AS 
 SELECT tbl_banners."imgSrc",
    tbl_banners.code,
    tbl_home."imgNewArrival",
    tbl_home."imgTopPicks"
   FROM tbl_banners 
   LEFT JOIN tbl_home ON tbl_banners."codeHome"::text = tbl_home.code::text