CREATE OR REPLACE VIEW public.view_about AS 
 SELECT tbl_about.slogan,
    tbl_about.title,
    tbl_about."imgFirstBanner",
    tbl_about."titleFirstPost",
    tbl_about."contentFirstPost",
    tbl_about."imgSecondBanner",
    tbl_about."titleSecondPost",
    tbl_about."contentSecondPost",
    "tbl_webConfiguration".title as principal
   FROM tbl_about 
   LEFT JOIN "tbl_webConfiguration" ON tbl_about."webConfigCode"::text = "tbl_webConfiguration".code::text