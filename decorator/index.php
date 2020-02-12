<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

function createForm()
{
    function createInput($type, $label)
    {
        $inputContainer = new Div();
        $inputLabel = new SizeDecorator(new DisplayDecorator((new Paragraph())->add(new Text($label)), 'inline-block'), 100);
        $input = new DisplayDecorator(new Input($type), 'inline-block');
        $inputContainer->add($inputLabel);
        $inputContainer->add($input);

        return $inputContainer;
    }

    $form = new Form();

    $loginTitle = (new Heading(1))->add(new Text('Login!'));
    $form->add($loginTitle);

    $subHeading = (new Paragraph())->add(new Text('Experience magic!'));
    $form->add($subHeading);

    $form->add(createInput('text','Email: '));
    $form->add(createInput('password','Password: '));
    $form->add(createInput('submit',''));

    return $form;
}

$container = new BackgroundDecorator(
    new PaddingDecorator(
        new Div(),
        10,
        10,
        10,
        10
    ),
    '#f3f3f3');


$container->add(createForm());

echo $container->render();
