$('.select2').select2({
    data: ["Private School", "Gov school"],
    tags: true,
    maximumSelectionLength: 10,
    tokenSeparators: [',', ' '],
    placeholder: "Select or type keywords"
});

$('.select3').select2({
    data: ["National Health Laboratory", "Bumrungrad Clinic Yangon", "N Health Myanmar"],
    tags: true,
    maximumSelectionLength: 10,
    tokenSeparators: [',', ' '],
    placeholder: "Select or type keywords"
});

$('.select4').select2({
    data: ["YBS", "Airport Transportation"],
    tags: true,
    maximumSelectionLength: 10,
    tokenSeparators: [',', ' '],
    placeholder: "Select or type keywords"
});

$('.select5').select2({
    tags: true,
    maximumSelectionLength: 10,
    tokenSeparators: [',', ' '],
    placeholder: ""
});