<?php get_header(); ?>

<?php


$program_base_dir = get_template_directory() . '/2023-spring-program-data';
$program_json = file_get_contents("$program_base_dir/program.json");

function students_as_array(string $file_name): array
{
    global $program_base_dir;
    $file_contents = file_get_contents("$program_base_dir/$file_name");
    return preg_split('/\n/', $file_contents, PREG_SPLIT_NO_EMPTY);
}

function students_as_ul(string $file_name)
{
    $students = students_as_array($file_name);
    $students_as_list_items = array_map(fn ($student) => "<li>$student</li>", $students);
    return "<ul>" . join($students_as_list_items) . "</ul>";
}

$prek_k = students_as_array("prek-k.txt");
$first_second_grade = students_as_array("1st-2nd-grade.txt");
$third_seventh_grade = students_as_array("3rd-7th-grade.txt");

print_r($prek_k);

$program = json_decode($program_json);

$title = "$program->season $program->year Concert";

function participant_as_html($participant)
{
    if ($participant->type == 'anchor') {
        return "<a class=\"participant-title\" href=\"$participant->href\">$participant->title</a>";
    }

    if ($participant->type == 'text') {
        return "<span class=\"participant-title\">$participant->title</span>";
    }

    if ($participant->type == 'list') {
        $names_as_list_items = join(array_map(fn ($name) => "<li>$name</li>", $participant->names));

        return "
        <dl>
            <dt class=\"participant-title\">$participant->title</dt>
            <dd>
                <ul>
                    $names_as_list_items
                </ul>
            </dd>
        </dl>
        ";
    }
}
?>

<main id="single-concert-program">
    <h1><?= $title; ?></h1>

    <nav>
        <ul>
            <li><a href="#program">Program</a></li>
            <li><a href="#students">Students</a></li>
            <li><a href="#teachers">Teachers</a></li>
        </ul>
    </nav>

    <section id="program">
        <h2>Program</h2>
        <table>
            <tbody>
                <?php foreach ($program->songs as $song) : ?>
                    <tr>
                        <th><?= $song->title ?></th>
                        <td>
                            <?php foreach ($song->participants as $participant) : ?>
                                <?php echo participant_as_html($participant); ?>
                            <?php endforeach; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <section id="students">
        <h2>Students</h2>
    </section>

    <section id="teachers">
        <h2>Teachers</h2>
    </section>

    <section id="students">
        <h2>Students</h2>

        <section id="prek-k">
            <h3>Pre-K – K</h3>
            <?= students_as_ul('prek-k.txt'); ?>
        </section>

        <section id="1st-2nd-grade">
            <h3>1st – 2nd Grade</h3>
            <?= students_as_ul('1st-2nd-grade.txt'); ?>
        </section>

        <section id="3rd-7th-grade">
            <h3>3rd – 7th Grade</h3>
            <?= students_as_ul('3rd-7th-grade.txt'); ?>
        </section>

    </section>

    <section id="special-thanks">
        <h2>Special Thanks</h2>
        <ul>
            <li>
                <strong>TavaCi Corp., Tami Van Dusen, and Cindy Bowen</strong> for
                providing this amazing program
            </li>
            <li>
                <strong>Melanie Day</strong> and the
                <strong>Box Elder High School Tech and Light Crew</strong>
            </li>
            <li><strong>Candice Nichols</strong>, Backstage Manager</li>
        </ul>
    </section>

</main>

<?php get_footer(); ?>