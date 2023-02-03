module.exports = {
    branches: "main",
    repositoryUrl: "https://github.com/franicon/react-app-ci",
    plugins: [
        "@semantic-release/commit-analyzer",
        "@semantic-release/release-notes-generator",
        "@semantic-release/github",
    ]
}
