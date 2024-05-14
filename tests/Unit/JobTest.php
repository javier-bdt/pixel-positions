<?php

use App\Models\Employer;
use App\Models\Job;

// it or test() are the same
it('belongs to an employer', function () {
    /// AAA Arrange, Act, Assert
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);
    // Act and Assert
    expect($job->employer()->is($employer))->toBeTrue();
});

it('can have tags', function () {
    /// AAA Arrange, Act, Assert

    // Arrange
    $job = Job::factory()->create();

    // act
    $job->tag('Frontend');

    // assert

    expect(count($job->tags))->toBeGreaterThanOrEqual(1);


});
