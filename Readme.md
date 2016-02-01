# Adaptive question behaviour for CodeRunner questions.

This Moodle question behaviour was created by Richard Lobb,
University of Canterbury, New Zealand.

This question behaviour was created solely for use with CodeRunner:
https://github.com/trampgeek/moodle-qtype_coderunner/. It provides the
caching of question test results needed to prevent re-testing a student's
code every time the result page is viewed.

To install, either [download the zip file](https://github.com/trampgeek/moodle-qbehaviour_adaptive_adapted_for_coderunner/archive/master.zip,
unzip it, and place it in the directory `moodle/question/behaviour/adaptive_adapted_for_coderunner`.
Alternatively, get the code using git by running the following command in the
top level folder of your Moodle install:

    git clone git://github.com/trampgeek/moodle-qbehaviour_adaptivemultipart.git question/behaviour/adaptive_adapted_for_coderunner

For full install instructions, see the
[CodeRunner install instructions](https://github.com/trampgeek/moodle-qtype_coderunner/blob/master/Readme.md).