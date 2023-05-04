<?php get_header(); ?>

<?php


$program_base_dir = get_template_directory() . '/2023-spring-program-data';
$program_json = file_get_contents("$program_base_dir/program.json");

function students_as_array(string $file_name): array
{
    global $program_base_dir;
    $students = file("$program_base_dir/$file_name");
    return $students;
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

$program = json_decode($program_json);

$title = "$program->season $program->year Concert";

function names_as_list_items(array $names)
{
    return join(array_map(fn ($name) => "<li>$name</li>", $names));
}

function participant_as_html($participant)
{
    if ($participant->type == 'anchor') {
        return "<a class=\"participant-title\" href=\"$participant->href\">$participant->title</a>";
    }

    if ($participant->type == 'list') {
        $names_as_list_items = names_as_list_items($participant->names);
        $list = "<ul>$names_as_list_items</ul>";

        if (isset($participant->title)) {
            return "
                <h4 class=\"participant-title\">$participant->title</h5>
                $list
            ";
        }

        return $list;
    }

    if ($participant->type == 'collapsible') {
        $content = $participant->content;
        $content_as_html = participant_as_html($content);

        return "
            <details>
                <summary>
                $participant->title (click to expand)
                </summary>
                $content_as_html
            </details>
        ";
    }
}
?>

<main id="single-concerts">
    <div class="g-max-width-wrapper">

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
            <div class="wp-block-table">
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
            </div>
        </section>


        <section id="students">
            <h2>Students</h2>

            <section id="prek-k" class="g-well">
                <div class="g-well-body">
                    <h3>Pre-K – K</h3>
                    <?= students_as_ul('prek-k.txt'); ?>
                </div>
            </section>

            <section id="1st-2nd-grade" class="g-well">
                <div class="g-well-body">
                    <h3>1st – 2nd Grade</h3>
                    <?= students_as_ul('1st-2nd-grade.txt'); ?>
                </div>
            </section>

            <section id="3rd-7th-grade" class="g-well">
                <div class="g-well-body">
                    <h3>3rd – 7th Grade</h3>
                    <?= students_as_ul('3rd-7th-grade.txt'); ?>
                </div>
            </section>

        </section>

        <section id="teachers">
            <h2>Teachers</h2>
            <div class="g-well">
                <div class="g-well-body">
                    <figure>
                        <img src="/wp-content/themes/tavaci-wp-theme/img/avatar-megan.jpeg" alt="" />
                        <figcaption>Megan Owen</figcaption>
                    </figure>
                    <figure>
                        <img src="/wp-content/themes/tavaci-wp-theme/img/avatar-karalee.jpeg" alt="" />
                        <figcaption>Karalee Kidd</figcaption>
                    </figure>
                    <div class="teacher-lists">
                        <div class="teacher-list">
                            <h3>Assistant Teachers</h3>
                            <ul>
                                <li>Sherrie Wayment</li>
                                <li>Vali Veater</li>
                            </ul>
                        </div>
                        <div class="teacher-list">
                            <h3>Student Teachers</h3>
                            <ul>
                                <li>Brooke Walker</li>
                                <li>Lauren Brockbank</li>
                                <li>Lydia Donaldson</li>
                                <li>Ethan McArthur</li>
                                <li>Madelyn Little</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="special-thanks">
            <h2>Special Thanks</h2>
            <div class="g-well">
                <div class="g-well-body">
                    <ul>
                        <li>
                            <strong>TavaCi Corp., Tami Van Dusen, and Cindy Bowen</strong> for
                            providing this amazing program
                        </li>
                        <li>
                            <strong>Melanie Day</strong> and the
                            <strong>Box Elder High School Tech and Light Crew</strong>
                        </li>
                        <li>
                            <strong>Candice Nichols</strong>, Backstage Manager
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>