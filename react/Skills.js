const { useState } = React;

function Skills() {
    const [skills, setSkills] = useState([
        {title: 'HTML', experience: 'more than 3 years', project: 5, id: 1},
        {title: 'CSS', experience: 'more than 3 years', project: 5, id: 2},
        {title: 'JavaScript', experience: 'more than 2 years', project: 3, id: 3},
        {title: 'jQuery', experience: 'more than 1 years', project: 2, id: 4},
        {title: 'PHP', experience: 'more than 3 years', project: 7, id: 5},
        {title: 'MySQL', experience: 'more than 2 years', project: 4, id: 6},
        {title: 'TypeScript', experience: 'less than 1 year', project: 1, id: 7},
        {title: 'Java', experience: 'more than 2 years', project: 3, id: 8},
        {title: 'Laravel', experience: 'less than 1 year', project: 1, id: 9},
        {title: 'XML', experience: 'less than 1 year', project: 0, id: 10},
        {title: 'JSON', experience: 'less than 1 year', project: 1, id: 11},
        {title: 'C++', experience: 'more than 1 year', project: 0, id: 12}
    ]);

    return (
        <>
            {skills.map((skill) => (
                <div className="skill-preview" key={skill.id}>
                    <h1 style={{fontSize: '28px'}}>{skill.title}</h1>
                    <p>Experience: {skill.experience}</p>
                    <p>Worked: {skill.project} projects</p>
                </div>
            ))}  
        </>
    );
}

ReactDOM.render(<Skills />, document.getElementById('skills'));