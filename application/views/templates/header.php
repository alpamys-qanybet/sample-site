<?$current = isset($current) ? $current: 'pagea';?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	
    <title><?=$title?></title>
    <meta charset="utf-8">
	
    <style>
        body {
            /*font-size: 16px;*/
            font-size: 17px;
            font-stretch: extra-condensed;
            font-weight: 400;
        }

        .header ul li {
            display:inline;
        }

        .header ul li.active a {
            background-color: #aa0000;
        }

        .header ul li a:hover {
            background-color: #aa0000;
        }

    </style>
</head>

<body>
    <div class='header'>
        <ul>
            <li class="<?php echo ($current == 'pagea') ? 'active' : '';?>">
                <a href="<?php echo base_url('/'); ?>pagea">Page A</a>
            </li>
            <li class="<?php echo ($current == 'pageb') ? 'active' : '';?>">
                <a href="<?php echo base_url('/'); ?>pageb">Page B</a>
            </li>
            <li class="<?php echo ($current == 'pagec') ? 'active' : '';?>">
                <a href="<?php echo base_url('/'); ?>pagec">Page C</a>
            </li>
            <li class="<?php echo ($current == 'paged') ? 'active' : '';?>">
                <a href="<?php echo base_url('/'); ?>paged">Page D</a>
            </li>
        </ul>
    </div>
