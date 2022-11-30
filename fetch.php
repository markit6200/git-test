<?php
include_once("db_connect.php");

$query = "SELECT
        VIEW_VIDEO_INFO_STATIC.RequestID,
        VIEW_VIDEO_INFO_STATIC.PersonID,
        VIEW_VIDEO_INFO_STATIC.FirstName,
        VIEW_VIDEO_INFO_STATIC.LastName,
        VIEW_VIDEO_INFO_STATIC.DepartmentID,
        VIEW_VIDEO_INFO_STATIC.DepartmentName,
        VIEW_VIDEO_INFO_STATIC.SchoolID,
        VIEW_VIDEO_INFO_STATIC.SchoolName,
        VIEW_VIDEO_INFO_STATIC.LOG_USER,
        VIEW_VIDEO_INFO_STATIC.URL,
        VIEW_VIDEO_INFO_STATIC.812videoV2,
        VIEW_VIDEO_INFO_STATIC.812audioV2,
        VIEW_VIDEO_INFO_STATIC.813videoV2,
        VIEW_VIDEO_INFO_STATIC.813audioV2,
        VIEW_VIDEO_INFO_STATIC.820_1videoV2,
        VIEW_VIDEO_INFO_STATIC.820_1audioV2,
        VIEW_VIDEO_INFO_STATIC.820_2videoV2,
        VIEW_VIDEO_INFO_STATIC.820_2audioV2,
        VIEW_VIDEO_INFO_STATIC.820_3videoV2,
        VIEW_VIDEO_INFO_STATIC.820_3audioV2,
        VIEW_VIDEO_INFO_STATIC.931_2videoV2,
        VIEW_VIDEO_INFO_STATIC.931_2audioV2,
        VIEW_VIDEO_INFO_STATIC.931_3videoV2,
        VIEW_VIDEO_INFO_STATIC.931_3audioV2,
        VIEW_VIDEO_INFO_STATIC.932_1videoV2,
        VIEW_VIDEO_INFO_STATIC.932_1audioV2,
        VIEW_VIDEO_INFO_STATIC.932_2videoV2,
        VIEW_VIDEO_INFO_STATIC.932_2audioV2,
        VIEW_VIDEO_INFO_STATIC.932_3videoV2,
        VIEW_VIDEO_INFO_STATIC.932_3audioV2,
        VIEW_VIDEO_INFO_STATIC.uploadURL812VDO,
        VIEW_VIDEO_INFO_STATIC.uploadURL813VDO,
        VIEW_VIDEO_INFO_STATIC.uploadURL820_1,
        VIEW_VIDEO_INFO_STATIC.uploadURL820_2,
        VIEW_VIDEO_INFO_STATIC.uploadURL820_3,
        VIEW_VIDEO_INFO_STATIC.uploadURL931_2VDO,
        VIEW_VIDEO_INFO_STATIC.uploadURL931_3VDO,
        VIEW_VIDEO_INFO_STATIC.uploadURL932_1,
        VIEW_VIDEO_INFO_STATIC.uploadURL932_2,
        VIEW_VIDEO_INFO_STATIC.uploadURL932_3,
        LOG_DOWNLOAD.RequestID AS Log_download_RequestID,
        LOG_DOWNLOAD.DownloadAt
        FROM
        VIEW_VIDEO_INFO_STATIC 
        LEFT JOIN LOG_DOWNLOAD
        ON VIEW_VIDEO_INFO_STATIC.RequestID = LOG_DOWNLOAD.RequestID 
        WHERE
        ( 812videoV2 NOT LIKE '%aac%' AND 812videoV2 NOT LIKE '%h264%' AND 812videoV2 <> '' AND 812videoV2 NOT LIKE '%wrong%' AND 812videoV2 NOT LIKE '%png%' AND 812videoV2 NOT LIKE '%pcm_s16be%') 
        OR ( 813videoV2 NOT LIKE '%aac%' AND 813videoV2 NOT LIKE '%h264%' AND 813videoV2 <> '' AND 813videoV2 NOT LIKE '%wrong%' AND 813videoV2 NOT LIKE '%png%' AND 813videoV2 NOT LIKE '%pcm_s16be%') 
        OR ( 820_1videoV2 NOT LIKE '%aac%' AND 820_1videoV2 NOT LIKE '%h264%' AND 820_1videoV2 <> '' AND 820_1videoV2 NOT LIKE '%wrong%' AND 820_1videoV2 NOT LIKE '%png%' AND 820_1videoV2 NOT LIKE '%pcm_s16be%') 
        OR ( 820_2videoV2 NOT LIKE '%aac%' AND 820_2videoV2 NOT LIKE '%h264%' AND 820_2videoV2 <> '' AND 820_2videoV2 NOT LIKE '%wrong%' AND 820_2videoV2 NOT LIKE '%png%' AND 820_2videoV2 NOT LIKE '%pcm_s16be%') 
        OR ( 820_3videoV2 NOT LIKE '%aac%' AND 820_3videoV2 NOT LIKE '%h264%' AND 820_3videoV2 <> '' AND 820_3videoV2 NOT LIKE '%wrong%' AND 820_3videoV2 NOT LIKE '%png%' AND 820_3videoV2 NOT LIKE '%pcm_s16be%') 
        OR ( 931_2videoV2 NOT LIKE '%aac%' AND 931_2videoV2 NOT LIKE '%h264%' AND 931_2videoV2 <> '' AND 931_2videoV2 NOT LIKE '%png%' AND 931_2videoV2 NOT LIKE '%pcm_s16be%') 
        OR ( 931_3videoV2 NOT LIKE '%aac%' AND 931_3videoV2 NOT LIKE '%h264%' AND 931_3videoV2 <> '' AND 931_3videoV2 NOT LIKE '%png%' AND 931_3videoV2 NOT LIKE '%pcm_s16be%') 
        OR ( 932_1videoV2 NOT LIKE '%aac%' AND 932_1videoV2 NOT LIKE '%h264%' AND 932_1videoV2 <> '' AND 932_1videoV2 NOT LIKE '%pdf%' AND 932_1videoV2 NOT LIKE '%png%' AND 932_1videoV2 NOT LIKE '%pcm_s16be%') 
        OR ( 932_2videoV2 NOT LIKE '%aac%' AND 932_2videoV2 NOT LIKE '%h264%' AND 932_2videoV2 <> '' AND 932_2videoV2 NOT LIKE '%pdf%' AND 932_2videoV2 NOT LIKE '%png%' AND 932_2videoV2 NOT LIKE '%pcm_s16be%') 
        OR ( 932_3videoV2 NOT LIKE '%aac%' AND 932_3videoV2 NOT LIKE '%h264%' AND 932_3videoV2 <> '' AND 932_3videoV2 NOT LIKE '%pdf%' AND 932_3videoV2 NOT LIKE '%png%' AND 932_3videoV2 NOT LIKE '%pcm_s16be%') 
        OR ( 812audioV2 NOT LIKE '%aac%' AND 812audioV2 NOT LIKE '%h264%' AND 812audioV2 <> '' AND 812audioV2 NOT LIKE '%wrong%' AND 812audioV2 NOT LIKE '%png%' AND 812audioV2 NOT LIKE '%pcm_s16be%') 
        OR ( 813audioV2 NOT LIKE '%aac%' AND 813audioV2 NOT LIKE '%h264%' AND 813audioV2 <> '' AND 813audioV2 NOT LIKE '%wrong%' AND 813audioV2 NOT LIKE '%png%' AND 813audioV2 NOT LIKE '%%pcm_s16be') 
        OR ( 820_1audioV2 NOT LIKE '%aac%' AND 820_1audioV2 NOT LIKE '%h264%' AND 820_1audioV2 <> '' AND 820_1audioV2 NOT LIKE '%wrong%' AND 820_1audioV2 NOT LIKE '%png%' AND 820_1audioV2 NOT LIKE '%pcm_s16be%') 
        OR ( 820_2audioV2 NOT LIKE '%aac%' AND 820_2audioV2 NOT LIKE '%h264%' AND 820_2audioV2 <> '' AND 820_2audioV2 NOT LIKE '%wrong%' AND 820_2audioV2 NOT LIKE '%png%' AND 820_2audioV2 NOT LIKE '%pcm_s16be%') 
        OR ( 820_3audioV2 NOT LIKE '%aac%' AND 820_3audioV2 NOT LIKE '%h264%' AND 820_3audioV2 <> '' AND 820_3audioV2 NOT LIKE '%wrong%' AND 820_3audioV2 NOT LIKE '%png%' AND 820_3audioV2 NOT LIKE '%pcm_s16be%') 
        OR ( 931_2audioV2 NOT LIKE '%aac%' AND 931_2audioV2 NOT LIKE '%h264%' AND 931_2audioV2 <> '' AND 931_2audioV2 NOT LIKE '%wrong%' AND 931_2audioV2 NOT LIKE '%png%' AND 931_2audioV2 NOT LIKE '%pcm_s16be%') 
        OR ( 931_3audioV2 NOT LIKE '%aac%' AND 931_3audioV2 NOT LIKE '%h264%' AND 931_3audioV2 <> '' AND 931_3audioV2 NOT LIKE '%wrong%' AND 931_3audioV2 NOT LIKE '%png%' AND 931_3audioV2 NOT LIKE '%pcm_s16be%') 
        OR ( 932_1audioV2 NOT LIKE '%aac%' AND 932_1audioV2 NOT LIKE '%h264%' AND 932_1audioV2 <> '' AND 932_1audioV2 NOT LIKE '%wrong%' AND 932_1audioV2 NOT LIKE '%png%' AND 932_1audioV2 NOT LIKE '%pcm_s16be%') 
        OR ( 932_2audioV2 NOT LIKE '%aac%' AND 932_2audioV2 NOT LIKE '%h264%' AND 932_2audioV2 <> '' AND 932_2audioV2 NOT LIKE '%wrong%' AND 932_2audioV2 NOT LIKE '%png%' AND 932_2audioV2 NOT LIKE '%pcm_s16be%') 
        OR ( 932_3audioV2 NOT LIKE '%aac%' AND 932_3audioV2 NOT LIKE '%h264%' AND 932_3audioV2 <> '' AND 932_3audioV2 NOT LIKE '%wrong%' AND 932_3audioV2 NOT LIKE '%png%' AND 932_3audioV2 NOT LIKE '%pcm_s16be%') 
        ORDER BY
        812videoV2 ASC,
        813videoV2 DESC,
        820_1videoV2 DESC,
        820_2videoV2 DESC,
        820_3videoV2 DESC,
        931_2videoV2 DESC,
        931_3videoV2 DESC,
        932_1videoV2 DESC,
        932_2videoV2 DESC,
        932_3videoV2 DESC,
        DepartmentID ASC ";




$query1 = '';

if ($_POST["length"] != -1) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}



$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));

$result = mysqli_query($conn, $query . $query1);

$data = array();
while ($row = mysqli_fetch_array($result)) {
    $sub_array = array();

    if ($row['Log_download_RequestID'] !== null) {
        $sub_array[] = '<button type="button"  name="insert" class="btn btn-secondary btn-xs disabled insert" id="' . $row["RequestID"] . '">โหลดเสร็จเเล้ว</button>';
    } else {
        $sub_array[] = '<button  name="insert" class="btn btn-success btn-xs insert" id="' . $row["RequestID"] . '">โหลดเสร็จกด</button>';
    }

    $sub_array[] = '<div  class="update center" data-id="' . $row["RequestID"] . '" >' . $row["RequestID"] . '</div>';
    $sub_array[] = '<div  class="update" data-id="' . $row["RequestID"] . '" >' . $row["FirstName"] . ' ' . $row["LastName"] . '</div>';
    $sub_array[] = '<div  class="update" data-id="' . $row["RequestID"] . '" >' . $row["DepartmentName"] . '</div>';
    $sub_array[] = '<div  class="update" data-id="' . $row["RequestID"] . '" >' . $row["SchoolName"] . '</div>';
    $sub_array[] = '<div  class="update center" data-id="' . $row["RequestID"] . '" >' . $row["LOG_USER"] . '</div>';

    if ($row['Log_download_RequestID'] !== null) {
        $sub_array[] = '<a style="background-color:#9fa5aa;" class="btn btn-secondary  btn-xs update" data-id="' . $row["RequestID"] . '"  href="' . $row["URL"] . '" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
      </svg></a>';
    } else {
        $sub_array[] = '<a class="btn btn-success btn-xs update" data-id="' . $row["RequestID"] . '"  href="' . $row["URL"] . '" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
      </svg></a>
      ';
    }

    // --------uploadURL812VDO
    if ($row['812videoV2'] == "h264" && $row['812audioV2'] == "aac") {
        $sub_array[] = '';
    } else if ($row['812videoV2']  == "aac" && $row['812audioV2'] == "h264") {
        $sub_array[] = ' ';
    } else if ($row['812videoV2']  == null && $row['812audioV2'] == null) {
        $sub_array[] = ' ';
    } else {
        if ($row['Log_download_RequestID'] !== null) {
            $sub_array[] = '<a  class="btn btn-secondary disabled   btn-xs update update" data-id="' . $row["RequestID"] . '"  href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL812VDO"] . '" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
          </svg></a>';
        } else {
            $sub_array[] = '<a  onclick="CopyMe( '.$row["RequestID"] .')" title="video:' . $row['812videoV2'] . '   audio:' . $row['812audioV2'] . '" class="btn btn-success  update   update" data-id="' . $row["RequestID"] . '" href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL812VDO"] . '&name=812  "><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
          </svg></a>';
        }
    }
    // --------uploadURL813VDO
    if ($row['813videoV2'] == "h264" && $row['813audioV2'] == "aac") {
        $sub_array[] = '';
    } else if ($row['813videoV2']  == "aac" && $row['813audioV2'] == "h264") {
        $sub_array[] = ' ';
    } else if ($row['813videoV2']  == null && $row['813audioV2'] == null) {
        $sub_array[] = ' ';
    } else {
        if ($row['Log_download_RequestID'] !== null) {
            $sub_array[] = '<a  class="btn btn-secondary disabled   btn-xs update update" data-id="' . $row["RequestID"] . '"  href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL813VDO"] . '" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
          </svg></a>';
        } else {
            $sub_array[] = '<a  title="video:' . $row['813videoV2'] . '   audio:' . $row['813audioV2'] . '"  class="btn btn-success btn-xs update   update" data-id="' . $row["RequestID"] . '" href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL813VDO"] . '&name=813  "><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
          </svg></a>';
        }
    }

    // --------uploadURL820_1
    if ($row['820_1videoV2'] == "h264" && $row['820_1audioV2'] == "aac") {
        $sub_array[] = '';
    } else if ($row['820_1videoV2']  == "aac" && $row['820_1audioV2'] == "h264") {
        $sub_array[] = ' ';
    } else if ($row['820_1videoV2']  == null && $row['820_1audioV2'] == null) {
        $sub_array[] = ' ';
    } else {
        if ($row['Log_download_RequestID'] !== null) {
            $sub_array[] = '<a  class="btn btn-secondary disabled   btn-xs update update" data-id="' . $row["RequestID"] . '"  href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL820_1"] . '" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
          </svg></a>';
        } else {
            $sub_array[] = '<a title="video:' . $row['820_1videoV2'] . '   audio:' . $row['820_1audioV2'] . '"  class="btn btn-success btn-xs update   update" data-id="' . $row["RequestID"] . '" href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL820_1"] . '&name=820_1  "><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
          </svg></a>';
        }
    }
    // --------uploadURL820_2
    if ($row['820_2videoV2'] == "h264" && $row['820_2audioV2'] == "aac") {
        $sub_array[] = '';
    } else if ($row['820_2videoV2']  == "aac" && $row['820_2audioV2'] == "h264") {
        $sub_array[] = ' ';
    } else if ($row['820_2videoV2']  == null && $row['820_2audioV2'] == null) {
        $sub_array[] = ' ';
    } else {
        if ($row['Log_download_RequestID'] !== null) {
            $sub_array[] = '<a  class="btn btn-secondary disabled   btn-xs update update" data-id="' . $row["RequestID"] . '"  href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL820_2"] . '" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
          </svg></a>';
        } else {
            $sub_array[] = '<a title="video:' . $row['820_2videoV2'] . '   audio:' . $row['820_2audioV2'] . '"  class="btn btn-success btn-xs update   update" data-id="' . $row["RequestID"] . '" href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL820_2"] . '&name=820_2  "><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
          </svg></a>';
        }
    }
    // --------uploadURL820_3
    if ($row['820_3videoV2'] == "h264" && $row['820_3audioV2'] == "aac") {
        $sub_array[] = '';
    } else if ($row['820_3videoV2']  == "aac" && $row['820_3audioV2'] == "h264") {
        $sub_array[] = ' ';
    } else if ($row['820_3videoV2']  == null && $row['820_3audioV2'] == null) {
        $sub_array[] = ' ';
    } else {
        if ($row['Log_download_RequestID'] !== null) {
            $sub_array[] = '<a  class="btn btn-secondary disabled   btn-xs update update" data-id="' . $row["RequestID"] . '"  href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL820_3"] . '" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
          </svg></a>';
        } else {
            $sub_array[] = '<a title="video:' . $row['820_3videoV2'] . '   audio:' . $row['820_3audioV2'] . '" class="btn btn-success btn-xs update   update" data-id="' . $row["RequestID"] . '" href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL820_3"] . '&name=820_3  "><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
          </svg></a>';
        }
    }
    // --------uploadURL931_2VDO
    if ($row['931_2videoV2'] == "h264" && $row['931_2audioV2'] == "aac") {
        $sub_array[] = '';
    } else if ($row['931_2videoV2']  == "aac" && $row['931_2audioV2'] == "h264") {
        $sub_array[] = ' ';
    } else if ($row['931_2videoV2']  == null && $row['931_2audioV2'] == null) {
        $sub_array[] = ' ';
    } else {
        if ($row['Log_download_RequestID'] !== null) {
            $sub_array[] = '<a  class="btn btn-secondary disabled   btn-xs update update" data-id="' . $row["RequestID"] . '"  href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL931_2VDO"] . '" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
          </svg></a>';
        } else {
            $sub_array[] = '<a title="video:' . $row['931_2videoV2'] . '   audio:' . $row['931_2audioV2'] . '" class="btn btn-success btn-xs update   update" data-id="' . $row["RequestID"] . '" href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL931_2VDO"] . '&name=931_2  "><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
          </svg></a>';
        }
    }
    // --------uploadURL931_3VDO
    if ($row['931_3videoV2'] == "h264" && $row['931_3audioV2'] == "aac") {
        $sub_array[] = '';
    } else if ($row['931_3videoV2']  == "aac" && $row['931_3audioV2'] == "h264") {
        $sub_array[] = ' ';
    } else if ($row['931_3videoV2']  == null && $row['931_3audioV2'] == null) {
        $sub_array[] = ' ';
    } else {
        if ($row['Log_download_RequestID'] !== null) {
            $sub_array[] = '<a  class="btn btn-secondary disabled   btn-xs update update" data-id="' . $row["RequestID"] . '"  href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL931_3VDO"] . '" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
          </svg></a>';
        } else {
            $sub_array[] = '<a title="video:' . $row['931_3videoV2'] . '   audio:' . $row['931_3audioV2'] . '" class="btn btn-success btn-xs update   update" data-id="' . $row["RequestID"] . '" href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL931_3VDO"] . '&name=931_3  "><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
          </svg></a>';
        }
    }
    // --------uploadURL932_1
    if ($row['932_1videoV2'] == "h264" && $row['932_1audioV2'] == "aac") {
        $sub_array[] = '';
    } else if ($row['932_1videoV2']  == "aac" && $row['932_1audioV2'] == "h264") {
        $sub_array[] = ' ';
    } else if ($row['932_1videoV2']  == null && $row['932_1audioV2'] == null) {
        $sub_array[] = ' ';
    } else {
        if ($row['Log_download_RequestID'] !== null) {
            $sub_array[] = '<a  class="btn btn-secondary disabled   btn-xs update update" data-id="' . $row["RequestID"] . '"  href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL932_1"] . '" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
          </svg></a>';
        } else {
            $sub_array[] = '<a title="video:' . $row['932_1videoV2'] . '   audio:' . $row['932_1audioV2'] . '"  class="btn btn-success btn-xs update   update" data-id="' . $row["RequestID"] . '" href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL932_1"] . '&name=932_1  "><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
          </svg></a>';
        }
    }
    // --------uploadURL932_2
    if ($row['932_2videoV2'] == "h264" && $row['932_2audioV2'] == "aac") {
        $sub_array[] = '';
    } else if ($row['932_2videoV2']  == "aac" && $row['932_2audioV2'] == "h264") {
        $sub_array[] = ' ';
    } else if ($row['932_2videoV2']  == null && $row['932_2audioV2'] == null) {
        $sub_array[] = ' ';
    } else {
        if ($row['Log_download_RequestID'] !== null) {
            $sub_array[] = '<a  class="btn btn-secondary disabled   btn-xs update update" data-id="' . $row["RequestID"] . '"  href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL932_2"] . '" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
          </svg></a>';
        } else {
            $sub_array[] = '<a title="video:' . $row['932_2videoV2'] . '   audio:' . $row['932_2audioV2'] . '" class="btn btn-success btn-xs update   update" data-id="' . $row["RequestID"] . '" href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL932_2"] . '&name=932_2  "><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
          </svg></a>';
        }
    }
    // --------uploadURL932_3
    if ($row['932_3videoV2'] == "h264" && $row['932_3audioV2'] == "aac") {
        $sub_array[] = '';
    } else if ($row['932_3videoV2']  == "aac" && $row['932_3audioV2'] == "h264") {
        $sub_array[] = ' ';
    } else if ($row['932_3videoV2']  == null && $row['932_3audioV2'] == null) {
        $sub_array[] = ' ';
    } else {
        if ($row['Log_download_RequestID'] !== null) {
            $sub_array[] = '<a  class="btn btn-secondary disabled   btn-xs update update" data-id="' . $row["RequestID"] . '"  href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL932_3"] . '" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
          </svg></a>';
        } else {
            $sub_array[] = '<a title="video:' . $row['932_3videoV2'] . '   audio:' . $row['932_3audioV2'] . '" class="btn btn-success btn-xs update   update" data-id="' . $row["RequestID"] . '" href="download.php?id=' . $row["RequestID"] . '&url=' . $row["uploadURL932_3"] . '&name=932_3  "><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
          </svg></a>';
        }
    }
 
    
    

    $data[] = $sub_array;
}




function get_all_data($conn)
{
    $query = "SELECT
 VIEW_VIDEO_INFO_STATIC.RequestID,
 VIEW_VIDEO_INFO_STATIC.PersonID,
 VIEW_VIDEO_INFO_STATIC.FirstName,
 VIEW_VIDEO_INFO_STATIC.LastName,
 VIEW_VIDEO_INFO_STATIC.DepartmentID,
 VIEW_VIDEO_INFO_STATIC.DepartmentName,
 VIEW_VIDEO_INFO_STATIC.SchoolID,
 VIEW_VIDEO_INFO_STATIC.SchoolName,
 VIEW_VIDEO_INFO_STATIC.LOG_USER,
 VIEW_VIDEO_INFO_STATIC.URL,
 VIEW_VIDEO_INFO_STATIC.812videoV2,
 VIEW_VIDEO_INFO_STATIC.812audioV2,
 VIEW_VIDEO_INFO_STATIC.813videoV2,
 VIEW_VIDEO_INFO_STATIC.813audioV2,
 VIEW_VIDEO_INFO_STATIC.820_1videoV2,
 VIEW_VIDEO_INFO_STATIC.820_1audioV2,
 VIEW_VIDEO_INFO_STATIC.820_2videoV2,
 VIEW_VIDEO_INFO_STATIC.820_2audioV2,
 VIEW_VIDEO_INFO_STATIC.820_3videoV2,
 VIEW_VIDEO_INFO_STATIC.820_3audioV2,
 VIEW_VIDEO_INFO_STATIC.931_2videoV2,
 VIEW_VIDEO_INFO_STATIC.931_2audioV2,
 VIEW_VIDEO_INFO_STATIC.931_3videoV2,
 VIEW_VIDEO_INFO_STATIC.931_3audioV2,
 VIEW_VIDEO_INFO_STATIC.932_1videoV2,
 VIEW_VIDEO_INFO_STATIC.932_1audioV2,
 VIEW_VIDEO_INFO_STATIC.932_2videoV2,
 VIEW_VIDEO_INFO_STATIC.932_2audioV2,
 VIEW_VIDEO_INFO_STATIC.932_3videoV2,
 VIEW_VIDEO_INFO_STATIC.932_3audioV2,
 VIEW_VIDEO_INFO_STATIC.uploadURL812VDO,
 VIEW_VIDEO_INFO_STATIC.uploadURL813VDO,
 VIEW_VIDEO_INFO_STATIC.uploadURL820_1,
 VIEW_VIDEO_INFO_STATIC.uploadURL820_2,
 VIEW_VIDEO_INFO_STATIC.uploadURL820_3,
 VIEW_VIDEO_INFO_STATIC.uploadURL931_2VDO,
 VIEW_VIDEO_INFO_STATIC.uploadURL931_3VDO,
 VIEW_VIDEO_INFO_STATIC.uploadURL932_1,
 VIEW_VIDEO_INFO_STATIC.uploadURL932_2,
 VIEW_VIDEO_INFO_STATIC.uploadURL932_3,
 LOG_DOWNLOAD.RequestID AS Log_download_RequestID,
 LOG_DOWNLOAD.DownloadAt
 FROM
 VIEW_VIDEO_INFO_STATIC 
 LEFT JOIN LOG_DOWNLOAD
 ON VIEW_VIDEO_INFO_STATIC.RequestID = LOG_DOWNLOAD.RequestID 
 WHERE
 ( 812videoV2 NOT LIKE '%aac%' AND 812videoV2 NOT LIKE '%h264%' AND 812videoV2 <> '' AND 812videoV2 NOT LIKE '%wrong%' AND 812videoV2 NOT LIKE '%png%' AND 812videoV2 NOT LIKE '%pcm_s16be%') 
 OR ( 813videoV2 NOT LIKE '%aac%' AND 813videoV2 NOT LIKE '%h264%' AND 813videoV2 <> '' AND 813videoV2 NOT LIKE '%wrong%' AND 813videoV2 NOT LIKE '%png%' AND 813videoV2 NOT LIKE '%pcm_s16be%') 
 OR ( 820_1videoV2 NOT LIKE '%aac%' AND 820_1videoV2 NOT LIKE '%h264%' AND 820_1videoV2 <> '' AND 820_1videoV2 NOT LIKE '%wrong%' AND 820_1videoV2 NOT LIKE '%png%' AND 820_1videoV2 NOT LIKE '%pcm_s16be%') 
 OR ( 820_2videoV2 NOT LIKE '%aac%' AND 820_2videoV2 NOT LIKE '%h264%' AND 820_2videoV2 <> '' AND 820_2videoV2 NOT LIKE '%wrong%' AND 820_2videoV2 NOT LIKE '%png%' AND 820_2videoV2 NOT LIKE '%pcm_s16be%') 
 OR ( 820_3videoV2 NOT LIKE '%aac%' AND 820_3videoV2 NOT LIKE '%h264%' AND 820_3videoV2 <> '' AND 820_3videoV2 NOT LIKE '%wrong%' AND 820_3videoV2 NOT LIKE '%png%' AND 820_3videoV2 NOT LIKE '%pcm_s16be%') 
 OR ( 931_2videoV2 NOT LIKE '%aac%' AND 931_2videoV2 NOT LIKE '%h264%' AND 931_2videoV2 <> '' AND 931_2videoV2 NOT LIKE '%png%' AND 931_2videoV2 NOT LIKE '%pcm_s16be%') 
 OR ( 931_3videoV2 NOT LIKE '%aac%' AND 931_3videoV2 NOT LIKE '%h264%' AND 931_3videoV2 <> '' AND 931_3videoV2 NOT LIKE '%png%' AND 931_3videoV2 NOT LIKE '%pcm_s16be%') 
 OR ( 932_1videoV2 NOT LIKE '%aac%' AND 932_1videoV2 NOT LIKE '%h264%' AND 932_1videoV2 <> '' AND 932_1videoV2 NOT LIKE '%pdf%' AND 932_1videoV2 NOT LIKE '%png%' AND 932_1videoV2 NOT LIKE '%pcm_s16be%') 
 OR ( 932_2videoV2 NOT LIKE '%aac%' AND 932_2videoV2 NOT LIKE '%h264%' AND 932_2videoV2 <> '' AND 932_2videoV2 NOT LIKE '%pdf%' AND 932_2videoV2 NOT LIKE '%png%' AND 932_2videoV2 NOT LIKE '%pcm_s16be%') 
 OR ( 932_3videoV2 NOT LIKE '%aac%' AND 932_3videoV2 NOT LIKE '%h264%' AND 932_3videoV2 <> '' AND 932_3videoV2 NOT LIKE '%pdf%' AND 932_3videoV2 NOT LIKE '%png%' AND 932_3videoV2 NOT LIKE '%pcm_s16be%') 
 OR ( 812audioV2 NOT LIKE '%aac%' AND 812audioV2 NOT LIKE '%h264%' AND 812audioV2 <> '' AND 812audioV2 NOT LIKE '%wrong%' AND 812audioV2 NOT LIKE '%png%' AND 812audioV2 NOT LIKE '%pcm_s16be%') 
 OR ( 813audioV2 NOT LIKE '%aac%' AND 813audioV2 NOT LIKE '%h264%' AND 813audioV2 <> '' AND 813audioV2 NOT LIKE '%wrong%' AND 813audioV2 NOT LIKE '%png%' AND 813audioV2 NOT LIKE '%%pcm_s16be') 
 OR ( 820_1audioV2 NOT LIKE '%aac%' AND 820_1audioV2 NOT LIKE '%h264%' AND 820_1audioV2 <> '' AND 820_1audioV2 NOT LIKE '%wrong%' AND 820_1audioV2 NOT LIKE '%png%' AND 820_1audioV2 NOT LIKE '%pcm_s16be%') 
 OR ( 820_2audioV2 NOT LIKE '%aac%' AND 820_2audioV2 NOT LIKE '%h264%' AND 820_2audioV2 <> '' AND 820_2audioV2 NOT LIKE '%wrong%' AND 820_2audioV2 NOT LIKE '%png%' AND 820_2audioV2 NOT LIKE '%pcm_s16be%') 
 OR ( 820_3audioV2 NOT LIKE '%aac%' AND 820_3audioV2 NOT LIKE '%h264%' AND 820_3audioV2 <> '' AND 820_3audioV2 NOT LIKE '%wrong%' AND 820_3audioV2 NOT LIKE '%png%' AND 820_3audioV2 NOT LIKE '%pcm_s16be%') 
 OR ( 931_2audioV2 NOT LIKE '%aac%' AND 931_2audioV2 NOT LIKE '%h264%' AND 931_2audioV2 <> '' AND 931_2audioV2 NOT LIKE '%wrong%' AND 931_2audioV2 NOT LIKE '%png%' AND 931_2audioV2 NOT LIKE '%pcm_s16be%') 
 OR ( 931_3audioV2 NOT LIKE '%aac%' AND 931_3audioV2 NOT LIKE '%h264%' AND 931_3audioV2 <> '' AND 931_3audioV2 NOT LIKE '%wrong%' AND 931_3audioV2 NOT LIKE '%png%' AND 931_3audioV2 NOT LIKE '%pcm_s16be%') 
 OR ( 932_1audioV2 NOT LIKE '%aac%' AND 932_1audioV2 NOT LIKE '%h264%' AND 932_1audioV2 <> '' AND 932_1audioV2 NOT LIKE '%wrong%' AND 932_1audioV2 NOT LIKE '%png%' AND 932_1audioV2 NOT LIKE '%pcm_s16be%') 
 OR ( 932_2audioV2 NOT LIKE '%aac%' AND 932_2audioV2 NOT LIKE '%h264%' AND 932_2audioV2 <> '' AND 932_2audioV2 NOT LIKE '%wrong%' AND 932_2audioV2 NOT LIKE '%png%' AND 932_2audioV2 NOT LIKE '%pcm_s16be%') 
 OR ( 932_3audioV2 NOT LIKE '%aac%' AND 932_3audioV2 NOT LIKE '%h264%' AND 932_3audioV2 <> '' AND 932_3audioV2 NOT LIKE '%wrong%' AND 932_3audioV2 NOT LIKE '%png%' AND 932_3audioV2 NOT LIKE '%pcm_s16be%') 
 ORDER BY
 812videoV2 ASC,
 813videoV2 DESC,
 820_1videoV2 DESC,
 820_2videoV2 DESC,
 820_3videoV2 DESC,
 931_2videoV2 DESC,
 931_3videoV2 DESC,
 932_1videoV2 DESC,
 932_2videoV2 DESC,
 932_3videoV2 DESC,
 DepartmentID ASC ";
    $result = mysqli_query($conn, $query);
    return mysqli_num_rows($result);
}

$output = array(
    "draw"    => intval($_POST["draw"]),
    "recordsTotal"  =>  get_all_data($conn),
    "recordsFiltered" => $number_filter_row,
    "data"    => $data
);

echo json_encode($output);
