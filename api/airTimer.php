<?php
/* by air.airxyz.xyz */
 goto d1AR2Jd9vi; m8OlMthBjK: return; goto X314tyfIm3; d7pmOvkAmN: $arrBack["\x65\162\x72\x4e\x75\x6d"] = "\61"; $arrBack["\162\x65\x74\x4d\x73\147"] = "\xe6\227\xa0\351\x9c\200\xe8\xa6\201\347\x9b\221\xe6\x8e\247\xe7\232\x84\346\234\215\345\212\xa1\345\231\xa8\xef\xbc\214\xe6\x97\xa0\xe9\x9c\200\345\244\204\xe7\220\206\56\x2e\56"; goto p0iOGcr2F_; kxGpqNzraE: if ($link) { goto gq5eVfhNJ3; } $arrBack["\x72\145\x74\x4d\x73\x67"] = "\xe6\225\260\346\x8d\xae\345\xba\223\350\277\236\xe6\216\xa5\xe5\xa4\261\350\264\245"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; gq5eVfhNJ3: goto jhFPgQhXX_; d1AR2Jd9vi: date_default_timezone_set("\101\163\x69\141\x2f\x53\x68\141\156\x67\150\x61\x69"); header("\x41\143\143\145\163\x73\55\x43\x6f\156\164\x72\157\x6c\55\x41\x6c\x6c\157\167\55\x4f\x72\151\x67\151\156\72\x20\52"); $arrBack = array("\145\x72\162\x4e\165\155" => "\60", "\162\145\x74\x4d\163\147" => "\xe6\x9a\202\xe6\227\240\xe6\217\220\xe7\244\272", "\162\145\164\x44\x61\164\141" => array()); $json_data = json_decode(file_get_contents("\56\x2e\57\151\x6e\146\x6f\x2e\152\163\157\x6e"), true); $link = mysqli_connect($json_data["\163\x71\154\x5f\x68\x6f\163\164\x6e\x61\155\x65"] . "\72\x33\63\60\x36", $json_data["\x73\x71\154\x5f\x75\163\x65\x72\156\x61\x6d\145"], $json_data["\x73\x71\154\x5f\160\141\x73\163\167\x64"]); goto kxGpqNzraE; jhFPgQhXX_: mysqli_set_charset($link, "\165\x74\x66\70"); mysqli_select_db($link, $json_data["\x73\161\154\x5f\x75\163\145\162\156\x61\x6d\145"]); $sql = "\163\145\154\x65\x63\164\x20\x2a\40\146\x72\157\x6d\40\x76\x70\x73\40\167\x68\145\162\145\x20\151\163\111\x6e\163\x74\x61\x6c\154\101\151\x72\130\171\172\x20\x3d\40\x27\61\47\40"; $res = mysqli_query($link, $sql); $resNum = mysqli_num_rows($res); goto eGJHFGxgE3; W_lwZMFdAe: $dateTimestamp1 = strtotime($lastDate); $dateTimestamp2 = strtotime($currentDate); if ($dateTimestamp2 - $dateTimestamp1 > 300) { goto ptHWgSNHvA; } goto s3Vn4GTmej; ptHWgSNHvA: goto OdVpLUuJpO; eGJHFGxgE3: if ($resNum < 1) { goto d7pmOvkAmN; } ijvtgGOizl: if (!($row = mysqli_fetch_assoc($res))) { goto uKiGtCen4U; } $lastDate = $row["\x6c\141\163\x74\104\141\164\145"]; $currentDate = date("\x59\55\x6d\55\x64\x20\110\x3a\x69\x3a\163"); goto W_lwZMFdAe; J6rV0DTa9u: uKiGtCen4U: $arrBack["\145\162\162\x4e\165\x6d"] = "\61"; $arrBack["\162\145\164\115\163\147"] = "\xe5\xae\232\xe6\x97\266\344\xbb\273\345\212\241\xe6\x89\247\xe8\241\x8c\xe6\x88\x90\345\212\x9f\56\56\x2e" . date("\x59\55\155\x2d\144\x20\110\72\x69\72\x73"); echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); goto m8OlMthBjK; p0iOGcr2F_: echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); return; goto tkTzcpN77A; OdVpLUuJpO: $apiToken = $row["\x61\160\x69\124\x6f\153\x65\156"]; $sqlUpdate = "\125\120\x44\101\x54\105\40\x76\160\163\x20\123\105\x54\x20\xa\x20\40\40\40\40\40\40\40\x20\40\40\40\x20\40\40\x20\143\160\165\x20\x3d\x20\x27\x30\x27\x2c\xa\40\x20\x20\x20\x20\40\40\x20\40\40\x20\40\x20\40\40\x20\143\x70\165\125\x73\145\144\x20\x3d\x20\x27\x30\x27\54\xa\40\x20\x20\x20\40\40\40\40\40\40\x20\40\x20\x20\x20\40\x6d\145\155\x20\75\40\47\60\x27\54\12\x20\x20\x20\x20\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\x20\155\145\x6d\125\163\145\x64\40\75\x20\x27\60\47\54\xa\x20\40\x20\40\40\x20\x20\x20\40\x20\40\x20\x20\40\40\40\x64\151\x73\x6b\40\75\40\47\x30\107\x27\x2c\xa\x20\40\40\x20\40\40\40\x20\x20\x20\x20\x20\40\40\x20\x20\x64\151\x73\x6b\x55\163\145\x64\40\75\40\x27\60\107\x27\54\12\x20\x20\40\40\40\x20\40\x20\40\40\40\x20\x20\x20\40\x20\x75\160\123\160\145\145\144\40\75\40\x27\x30\x27\54\12\40\x20\40\x20\40\x20\x20\40\x20\40\x20\40\40\x20\40\x20\144\157\167\x6e\x53\160\x65\145\144\x20\75\40\47\60\x27\x2c\xa\x20\40\x20\x20\40\x20\40\x20\40\x20\40\x20\40\40\40\x20\x73\x74\141\164\165\x73\40\x3d\x20\x27\x32\x27\12\40\x20\x20\40\x20\40\40\x20\x20\x20\x20\x20\x20\40\40\40\127\x48\x45\122\x45\40\x61\x70\x69\x54\157\153\145\156\40\x3d\x20\47{$apiToken}\47"; $resInsert = mysqli_query($link, $sqlUpdate); s3Vn4GTmej: goto ijvtgGOizl; goto J6rV0DTa9u; tkTzcpN77A: X314tyfIm3: