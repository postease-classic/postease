<?php
 goto ObJp3; aGOQX: $mode = isset($_GET["\155\157\x64\145"]) ? $_GET["\155\x6f\144\145"] : 1; goto pCukE; v2rRz: if (isset($_GET["\160\162\157\143\x65\x73\163"]) && $_GET["\x70\162\157\143\145\x73\x73"] == 2) { $process_msg = TXT_CONFIGGENERAL_MSG_UPDATED; $process_msg_style = "\163\165\x63\x63\145\163\x73"; $process_msg_type = "\x44\157\x6e\x65"; } goto V1yWT; ObJp3: $target_posttype = $_SESSION[$session_key]["\x63\157\156\x66\x69\147\137\x70\157\x73\x74\x74\171\x70\145"]["\x74\141\x72\147\x65\x74\x5f\160\x6f\x73\x74\164\171\x70\145"] = empty($_GET["\164\x68\151\x73\137\x70\x6f\163\x74\164\x79\x70\145"]) ? empty($_SESSION[$session_key]["\x63\x6f\x6e\146\151\x67\137\x70\157\x73\x74\164\171\x70\x65"]["\164\x61\x72\147\145\x74\137\x70\x6f\163\164\x74\171\x70\145"]) ? null : $_SESSION[$session_key]["\x63\157\156\146\x69\x67\137\x70\x6f\163\x74\x74\x79\x70\145"]["\x74\141\162\147\x65\x74\x5f\160\x6f\x73\164\x74\x79\160\x65"] : $_GET["\x74\150\151\163\137\160\x6f\163\164\164\171\160\x65"]; goto smc73; I3OZs: $page_sub = $PageNum->getSubPost("\x63\157\x6e\146\151\x67\137\160\x6f\163\x74\164\171\160\145"); goto SiU78; xLxYB: $process_msg_style = null; goto MmrfC; lDpjN: $target = isset($_POST["\x74\141\162\147\x65\x74"]) ? $_POST["\164\x61\x72\x67\145\164"] : null; goto CrRV8; MmrfC: $process_msg_type = null; goto cPiO5; pCukE: $process = isset($_GET["\x70\x72\x6f\x63\145\x73\163"]) ? $_GET["\160\x72\x6f\x63\145\163\x73"] : 0; goto lDpjN; cPiO5: if ($mode == 3) { if ($target == "\x70\157\x73\x74\x74\171\160\145\x5f\157\x70\164\151\x6f\x6e") { if (!empty($_POST["\x63\157\155\x6d\x65\156\164\x5f\x74\x79\160\145"])) { $_POST["\143\157\155\155\145\x6e\164\x5f\x74\x79\x70\x65"] = implode("\x2c", $_POST["\143\157\x6d\155\145\156\164\x5f\x74\x79\x70\145"]); } else { $_POST["\143\x6f\155\x6d\x65\x6e\164\137\164\x79\x70\145"] = ''; } } try { $pdo->beginTransaction(); if (isset($_POST["\x70\145\162\x6d\141\x6c\x69\x6e\153\x5f\163\164\x79\154\145"])) { $permalink_type = !empty($_POST["\x72\145\x77\162\151\164\x65\137\x75\x72\x6c"]) ? 2 : 1; $permalink_base = !empty($_POST["\x72\145\167\162\151\164\145\137\x75\x72\x6c"]) ? $_POST["\x72\x65\167\x72\x69\164\145\137\165\162\154"] : $_POST["\x72\x65\163\157\165\162\x63\x65\137\165\162\x6c"]; $consolidation_first = $permalink_type == 2 ? "\57" : "\x3f\x70\x6f\x73\164\137\x6b\145\x79\x3d"; $consolidation_common = $permalink_type == 2 ? "\57" : "\x2d"; $sql = "\xa\x9\11\x9\11\x9\123\105\114\105\103\x54\40\160\x62\56\151\x64\54\40\160\x62\x2e\x68\141\163\150\x5f\x69\144\54\x20\160\x62\x2e\163\154\x75\x67\x2c\40\x70\142\x2e\x70\165\x62\x6c\151\163\x68\137\x64\x61\x74\x65\x74\151\155\145\x2c\x20\x70\x62\x2e\x63\x61\x74\x65\x67\x6f\x72\171\137\x69\144\x2c\x20\160\164\56\x74\x69\x74\154\x65\x20\x46\x52\117\115\x20{$table_prefix}\x70\x6f\163\164\163\137\142\x61\x73\145\x20\x41\123\40\x70\142\xa\11\11\x9\11\x9\x4c\x45\x46\124\x20\x4a\x4f\111\x4e\x20{$table_prefix}\x70\x6f\x73\164\x73\x5f\164\x65\170\x74\40\101\x53\x20\x70\x74\x20\x4f\116\x20\160\142\x2e\x69\x64\x20\75\x20\x70\164\56\x62\141\x73\x65\137\151\144\12\11\11\x9\x9\x9\127\110\105\122\x45\x20\160\142\x2e\144\145\x6c\145\164\145\137\x66\x6c\x67\40\75\40\60\x20\x41\x4e\x44\x20\160\142\56\160\157\163\164\x74\171\x70\145\137\151\x64\40\x3d\40{$_SESSION[$session_key]["\x63\157\x6d\x6d\x6f\156"]["\164\150\151\163\x5f\160\157\x73\164\x74\x79\160\145"]}\12\11\11\11\x9"; $read_records = $pdo->prepare($sql); $read_records->execute(); while ($record = $read_records->fetch(PDO::FETCH_ASSOC)) { $permalink_key = null; $permalink_url = null; $permalink_uri = null; $category_slug = null; $slug = null; if (!empty($record["\163\154\x75\147"]) || !empty($record["\x74\151\164\154\x65"])) { $title_slug = preg_match("\57\136\133\141\x2d\x7a\x41\55\x5a\x30\55\71\x5f\55\135\53\44\x2f", preg_replace("\x2f\x28\40\174\343\x80\x80\51\57", '', $record["\x74\x69\164\154\x65"])) ? preg_replace("\x2f\50\40\x7c\343\200\200\x29\57", "\55", $record["\x74\151\164\154\x65"]) : preg_replace("\x2f\50\40\174\343\200\x80\x29\57", '', $record["\x74\x69\x74\x6c\145"]); $slug = !empty($record["\163\x6c\165\x67"]) ? $record["\x73\154\165\x67"] : $title_slug; } if (false !== in_array($_POST["\x70\x65\162\x6d\141\x6c\x69\156\153\137\163\x74\171\x6c\145"], array(2, 4, 6, 7, 8))) { if ($record["\x63\141\164\145\x67\x6f\x72\x79\x5f\x69\144"] != "\x30\x30\x30\60") { $category_ids = explode("\54", $record["\x63\x61\x74\145\147\157\x72\171\137\151\144"]); $sql = "\x53\105\x4c\105\103\x54\40\x73\154\x75\147\40\106\122\117\x4d\x20{$table_prefix}\x74\x61\x78\x6f\156\157\x6d\x69\x65\163\137\x62\141\x73\145\40\x57\110\x45\x52\105\40\144\x65\x6c\145\164\x65\137\146\154\147\x20\x3d\x20\60\40\x41\x4e\x44\x20\x69\x64\x20\75\x20{$category_ids[0]}\x20\101\x4e\x44\x20\x70\157\x73\x74\x74\x79\160\x65\x5f\151\x64\40\75\40{$_SESSION[$session_key]["\143\157\155\155\157\x6e"]["\164\x68\x69\x73\137\160\x6f\x73\x74\164\x79\160\x65"]}\40\x41\x4e\x44\40\143\x6c\x61\x73\x73\x69\x66\x69\x63\141\x74\x69\x6f\156\x20\x3d\x20\x31"; $read_category = $pdo->prepare($sql); $read_category->execute(); if ($category = $read_category->fetch(PDO::FETCH_ASSOC)) { $category_slug = $category["\163\154\x75\x67"]; } } } switch ($_POST["\160\x65\x72\155\141\154\151\x6e\x6b\137\163\x74\x79\x6c\145"]) { case 1: $permalink_key = $record["\150\x61\x73\150\137\151\144"]; $permalink_url = $permalink_base . $consolidation_first . $record["\x68\x61\x73\x68\x5f\x69\x64"]; break; case 2: $permalink_key = $record["\x68\141\163\x68\x5f\151\144"]; if (!$category_slug) { break; } $permalink_url = $permalink_type == 2 ? $permalink_url = $permalink_base . $consolidation_first . $category_slug . $consolidation_common . $record["\150\141\163\x68\137\151\144"] : ($permalink_url = $permalink_base . $consolidation_first . $record["\150\141\x73\x68\137\151\x64"]); break; case 3: $permalink_key = $record["\x69\144"]; $permalink_url = $permalink_base . $consolidation_first . $record["\151\x64"]; break; case 4: $permalink_key = $record["\151\x64"]; if (!$category_slug) { break; } $permalink_url = $permalink_type == 2 ? $permalink_url = $permalink_base . $consolidation_first . $category_slug . $consolidation_common . $record["\151\144"] : ($permalink_url = $permalink_base . $consolidation_first . $record["\x69\144"]); break; case 5: if (!empty($slug)) { $permalink_key = $slug; $permalink_url = $permalink_base . $consolidation_first . $slug; } break; case 6: if (!empty($category_slug) && !empty($slug)) { $permalink_key = $category_slug . "\x2d" . $slug; $permalink_url = $permalink_base . $consolidation_first . $category_slug . $consolidation_common . $slug; } break; case 7: if (!empty($record["\160\165\142\154\x69\x73\150\x5f\144\141\x74\x65\x74\x69\x6d\145"]) && !empty($slug)) { $permalink_key = substr($record["\160\165\x62\154\x69\x73\150\x5f\144\x61\164\145\164\151\x6d\x65"], 0, 10) . "\55" . $slug; $date = $permalink_type == 2 ? str_replace("\55", "\x2f", substr($record["\x70\165\142\154\x69\x73\150\x5f\x64\141\x74\x65\164\x69\x6d\x65"], 0, 10)) : substr($record["\160\x75\142\x6c\x69\x73\150\137\x64\x61\164\x65\164\151\155\145"], 0, 10); $permalink_url = $permalink_base . $consolidation_first . $date . $consolidation_common . $slug; } break; case 8: if (!empty($record["\x70\165\x62\154\x69\163\x68\137\x64\x61\164\145\x74\x69\155\145"]) && !empty($slug)) { $permalink_key = substr($record["\160\x75\x62\154\x69\x73\150\137\144\141\x74\145\164\x69\155\145"], 0, 7) . "\x2d" . $slug; $date = $permalink_type == 2 ? str_replace("\55", "\57", substr($record["\x70\x75\142\x6c\151\163\150\x5f\x64\141\164\x65\164\x69\x6d\x65"], 0, 7)) : substr($record["\160\x75\x62\154\x69\x73\x68\x5f\144\x61\164\x65\164\151\155\x65"], 0, 10); $permalink_url = $permalink_base . $consolidation_first . $date . $consolidation_common . $slug; } break; } $permalink_uri = fetchUriFromUrl($permalink_url, true); $sql = "\12\11\11\11\11\11\125\120\x44\101\124\105\x20{$table_prefix}\160\157\163\x74\x73\137\x62\x61\163\x65\40\x53\x45\x54\xa\11\x9\x9\x9\11\x9\160\x65\x72\x6d\141\154\151\156\153\x5f\153\x65\171\40\75\40\x3a\x50\105\x52\115\101\x4c\111\116\x4b\137\x4b\x45\x59\x2c\12\x9\x9\x9\x9\11\x9\160\145\x72\155\141\154\151\x6e\153\137\165\x72\151\x20\75\40\72\120\x45\x52\x4d\101\x4c\x49\x4e\x4b\x5f\125\122\111\xa\x9\x9\11\11\11\127\110\105\122\105\40\151\144\40\75\40\72\x49\104\12\11\x9\x9\x9"; $update_record = $pdo->prepare($sql); $update_record->bindValue("\x3a\120\x45\122\115\101\114\x49\x4e\x4b\x5f\x4b\105\x59", $permalink_key, PDO::PARAM_STR); $update_record->bindValue("\x3a\120\x45\122\115\x41\114\x49\x4e\x4b\x5f\x55\x52\111", $permalink_uri, PDO::PARAM_STR); $update_record->bindValue("\x3a\111\104", $record["\x69\x64"], PDO::PARAM_INT); $update_record->execute(); unset($update_record); $_POST["\165\x73\145\137\163\154\165\147\137\x66\x6c\x67"] = intval($_POST["\x70\x65\x72\155\141\x6c\x69\156\x6b\x5f\163\x74\x79\154\145"]) >= 5 ? 1 : 0; $_POST["\160\145\x72\x6d\x61\x6c\151\x6e\153\137\142\141\x73\x65\137\x70\x72\x64"] = fetchDomainFromUrl($permalink_base, true); } } foreach ($_POST as $item => $value) { $site_id = false !== array_key_exists($item, $posttype_mata_individual) ? $_SESSION[$session_key]["\x63\157\155\x6d\x6f\x6e"]["\164\150\x69\x73\137\163\151\164\x65"] : 0; $sql = "\xa\x9\11\11\11\x9\x55\120\104\101\124\x45\40{$table_prefix}\x63\x6f\x6e\146\x69\147\x73\x5f\x70\157\x73\164\164\171\160\145\x20\x53\105\x54\12\x9\x9\x9\11\11\x9\x76\141\x6c\165\145\x20\x3d\x20\72\x56\101\114\125\105\xa\x9\11\11\x9\x9\127\110\105\122\105\x20\163\151\164\145\x5f\x69\x64\40\75\40\72\123\x49\x54\x45\x5f\111\104\40\101\x4e\104\40\160\157\163\164\x74\x79\x70\145\137\151\144\x20\x3d\x20\x3a\x50\x4f\x53\x54\124\131\x50\x45\137\111\x44\40\101\x4e\x44\x20\151\164\145\x6d\x20\x3d\x20\x3a\111\124\105\115\12\x9\11\x9"; $update_record = $pdo->prepare($sql); $update_record->bindValue("\x3a\x53\111\124\105\x5f\x49\x44", $site_id); $update_record->bindValue("\x3a\x50\x4f\123\124\x54\x59\120\x45\137\x49\x44", $target_posttype); $update_record->bindValue("\x3a\126\x41\114\x55\105", $value); $update_record->bindValue("\x3a\111\x54\x45\115", $item); $update_record->execute(); unset($update_record); } resetCacheParams(); $pdo->commit(); } catch (PDOException $e) { $pdo->rollBack(); header("\x4c\157\143\x61\164\151\x6f\x6e\72\40\56\57\77\x76\x69\145\x77\x5f\x70\x61\x67\x65\75\143\157\x6e\x66\x69\147\137\x70\x6f\163\164\164\x79\160\145\x26\x70\162\157\x63\145\163\x73\75\61\x39\x26\145\x72\162\x6f\x72\137\x63\x6f\x64\145\75\70\71"); die; } header("\114\157\x63\141\164\x69\157\x6e\x3a\x20\56\57\77\x76\151\145\x77\x5f\x70\x61\147\x65\x3d\x63\x6f\x6e\x66\x69\x67\x5f\160\157\x73\164\164\171\160\x65\x26\x70\162\157\x63\x65\163\x73\x3d\62\46\x74\x61\162\147\x65\164\x3d{$target}\46\x63\150\x61\156\x67\x65\75\61\46\x63\x6c\145\141\x72\x3d\x31"); die; } goto v2rRz; smc73: $page = "\160\x6f\163\x74"; goto KkeDj; KkeDj: $page_main = $PageNum->getMain($page); goto I3OZs; hZQM0: $records = array(); goto RKEwu; CrRV8: $process_msg = null; goto xLxYB; V1yWT: if (isset($_GET["\x70\162\x6f\143\x65\163\x73"]) && $_GET["\x70\162\x6f\x63\145\x73\163"] == 19 && isset($_GET["\145\x72\162\x6f\x72\137\x63\157\144\x65"])) { $process_msg = $errormsg_list[$_GET["\145\x72\162\x6f\x72\x5f\143\157\144\x65"]]; $process_msg_style = "\144\141\156\147\x65\162"; $process_msg_type = "\105\162\162\x6f\x72"; } goto hZQM0; SiU78: $page_title_target = $page == "\160\157\x73\164" ? $_SESSION[$session_key]["\x63\x6f\155\155\157\156"]["\x70\x6f\x73\x74\164\x79\x70\145\163"][$_SESSION[$session_key]["\x63\157\x6d\x6d\157\156"]["\x74\x68\x69\x73\x5f\x70\x6f\x73\164\x74\171\160\x65"]]["\156\x61\x6d\145"] : TXT_CATEGORY_PAGETITLE_CONTACT; goto Z0hHq; CBeaT: $page_icon = "\x66\x61\x2d\143\157\147"; goto aGOQX; Z0hHq: $page_title_main = TXT_CONFIGPOSTTYPE_PAGETITLEMAIN($page_title_target); goto CBeaT; RKEwu: try { $sql = "\12\11\11\x9\x53\105\x4c\105\x43\x54\40\52\12\11\11\11\106\122\x4f\x4d\40{$table_prefix}\x63\157\156\x66\x69\147\163\137\160\x6f\163\x74\164\171\160\x65\12\11\x9\11\127\110\x45\122\x45\40\x28\163\x69\x74\145\x5f\151\144\40\x3d\x20{$_SESSION[$session_key]["\x63\157\155\x6d\157\x6e"]["\164\x68\151\163\137\163\151\x74\x65"]}\x20\117\122\x20\x73\x69\164\145\x5f\x69\144\40\x3d\x20\x30\51\x20\x41\116\x44\40\160\157\163\164\164\x79\160\145\137\x69\x64\x20\75\40{$target_posttype}\12\11"; $read_records = $pdo->prepare($sql); $read_records->execute(); $record_counter = 0; while ($record = $read_records->fetch(PDO::FETCH_ASSOC)) { $records[$record["\x69\164\x65\x6d"]] = $record; $record_counter++; } unset($read_records); foreach ($posttype_mata_individual as $item => $value) { if (false === array_key_exists($item, $records)) { $records[$item]["\x76\141\154\165\145"] = $value; $sql = "\12\11\x9\x9\x9\111\116\x53\105\122\124\x20\111\x4e\124\x4f\x20{$table_prefix}\x63\157\x6e\146\x69\x67\x73\x5f\160\x6f\163\x74\164\171\x70\145\xa\11\x9\11\x9\x9\x28\x20\163\151\x74\x65\137\x69\x64\54\40\40\x70\157\x73\x74\164\x79\x70\145\x5f\151\144\54\x20\x20\151\x74\145\155\x2c\40\x20\x76\x61\154\165\145\x29\12\x9\x9\11\x9\x56\101\x4c\x55\105\x53\12\11\11\11\11\11\50\72\x53\111\x54\x45\x5f\x49\x44\54\x20\x3a\120\x4f\123\x54\124\x59\x50\105\x5f\111\104\54\40\72\111\124\x45\115\x2c\40\x3a\x56\x41\114\x55\105\51\12\11\x9\11\x9"; $create_record = $pdo->prepare($sql); $create_record->bindValue("\x53\x49\x54\105\x5f\x49\104", $_SESSION[$session_key]["\143\157\x6d\x6d\x6f\x6e"]["\x74\x68\x69\163\x5f\163\x69\x74\145"]); $create_record->bindValue("\120\x4f\123\x54\x54\x59\120\x45\x5f\111\104", $_SESSION[$session_key]["\x63\x6f\155\x6d\x6f\156"]["\x74\150\151\163\137\x70\x6f\x73\164\x74\x79\160\145"]); $create_record->bindValue("\x49\124\x45\x4d", $item); $create_record->bindValue("\x56\101\x4c\x55\105", $value); $create_record->execute(); unset($create_record); } } $image_frames = array(); $sql = "\xa\11\x9\123\105\114\x45\103\124\x20\52\40\x46\122\117\x4d\x20{$table_prefix}\151\x6d\141\147\145\x5f\x66\x72\141\155\x65\x73\12\x9\x9\x57\110\105\x52\105\40\163\164\x61\164\165\163\40\x3d\x20\61\40\101\116\104\40\50\x28\x70\x61\162\x65\156\x74\x5f\x64\x69\x72\40\75\x20\47\146\162\x5f\141\x64\x6d\151\156\47\40\101\x4e\104\x20\143\x68\151\x6c\144\137\144\151\162\40\75\40\x27\145\x79\x65\x63\141\x74\143\x68\x27\51\40\x4f\122\x20\x28\160\141\x72\145\x6e\164\x5f\x64\x69\162\x20\x3d\40\x27\x66\x72\x5f\141\165\x74\x6f\47\x20\x4f\x52\40\160\141\162\145\156\164\x5f\x64\151\162\40\75\x20\47\x66\x72\x5f\x63\162\x6f\x70\47\x29\x29\12\11"; $read_records = $pdo->prepare($sql); $read_records->execute(); while ($record = $read_records->fetch(PDO::FETCH_ASSOC)) { $image_frames[] = $record; } unset($read_records); } catch (PDOException $e) { $read_error = 1; header("\x4c\157\x63\x61\164\x69\x6f\156\x3a\40\x2e\57\77\166\x69\145\x77\137\x70\141\x67\145\x3d\145\162\162\157\162\46\160\141\x67\x65\75{$page}\x26\162\x65\141\144\x5f\145\x72\x72\157\x72\75{$read_error}"); die; }