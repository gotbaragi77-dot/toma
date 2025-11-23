# CLAUDE.md - AI Assistant Guide for Toma Project

**Last Updated**: 2025-11-23
**Project**: toma (토마 디자인 - Toma Design)
**Repository**: gotbaragi77-dot/toma

---

## Table of Contents

1. [Project Overview](#project-overview)
2. [Repository Structure](#repository-structure)
3. [Development Workflow](#development-workflow)
4. [Git Conventions](#git-conventions)
5. [Coding Standards](#coding-standards)
6. [AI Assistant Guidelines](#ai-assistant-guidelines)
7. [Common Tasks](#common-tasks)
8. [Resources](#resources)

---

## Project Overview

### About
Toma (토마 디자인) is a design-focused project currently in its initial stages. The repository is set up and ready for development.

### Current State
- **Status**: Newly initialized
- **Primary Language**: To be determined
- **Framework**: To be determined
- **Development Stage**: Early initialization

### Project Goals
_To be documented as the project evolves_

---

## Repository Structure

### Current Structure
```
toma/
├── .git/                  # Git version control
├── README.md              # Project introduction
└── CLAUDE.md             # This file - AI assistant guide
```

### Expected Future Structure
As the project develops, the following structure is recommended:

```
toma/
├── src/                   # Source code
├── tests/                 # Test files
├── docs/                  # Documentation
├── config/                # Configuration files
├── public/                # Public assets (if web project)
├── scripts/               # Build and utility scripts
├── .gitignore            # Git ignore rules
├── package.json          # Dependencies (if Node.js)
├── README.md             # Project overview
└── CLAUDE.md             # AI assistant guide
```

---

## Development Workflow

### Branch Strategy

**Branch Naming Convention**:
- Feature branches: `claude/feature-name-{session-id}`
- All Claude Code branches must start with `claude/` and end with the session ID
- Current working branch: `claude/claude-md-mibl7ewx6ptiksf4-01QEUBXT73cxMzSPPcn5zjYY`

**Branch Workflow**:
1. Work is developed on feature branches
2. Branches are prefixed with `claude/` for AI-assisted development
3. Clean, focused commits with descriptive messages
4. Push to remote with `-u origin <branch-name>`

### Git Operations Best Practices

**Pushing Changes**:
```bash
# Always use -u flag for new branches
git push -u origin <branch-name>

# Branch MUST start with 'claude/' and end with session ID
# Example: claude/feature-xyz-01QEUBXT73cxMzSPPcn5zjYY
```

**Network Resilience**:
- Retry failed pushes/pulls up to 4 times with exponential backoff (2s, 4s, 8s, 16s)
- Fetch specific branches: `git fetch origin <branch-name>`

**Commit Signing**:
- Repository is configured for SSH commit signing
- Signing key: `/home/claude/.ssh/commit_signing_key.pub`
- All commits should be signed automatically

---

## Git Conventions

### Commit Messages

Follow conventional commit format:

```
<type>(<scope>): <subject>

<body>

<footer>
```

**Types**:
- `feat`: New feature
- `fix`: Bug fix
- `docs`: Documentation changes
- `style`: Code style changes (formatting, etc.)
- `refactor`: Code refactoring
- `test`: Adding or updating tests
- `chore`: Maintenance tasks
- `perf`: Performance improvements

**Examples**:
```
feat(ui): add responsive navigation menu

fix(api): resolve authentication timeout issue

docs(readme): update installation instructions
```

### Commit Practices

- **One logical change per commit**: Keep commits focused
- **Present tense**: "Add feature" not "Added feature"
- **Imperative mood**: "Fix bug" not "Fixes bug"
- **Reference issues**: Include issue numbers when applicable
- **Meaningful descriptions**: Explain the "why" not just the "what"

---

## Coding Standards

### General Principles

1. **Simplicity**: Avoid over-engineering
2. **Clarity**: Write self-documenting code
3. **Consistency**: Follow established patterns
4. **Security**: Avoid OWASP top 10 vulnerabilities
5. **Testing**: Write tests for new features

### Code Quality

- **DRY (Don't Repeat Yourself)**: Reduce code duplication
- **KISS (Keep It Simple, Stupid)**: Prefer simple solutions
- **YAGNI (You Aren't Gonna Need It)**: Don't add features prematurely
- **Single Responsibility**: Each module/function should do one thing well

### Security Considerations

Always be mindful of:
- Command injection
- XSS (Cross-Site Scripting)
- SQL injection
- CSRF (Cross-Site Request Forgery)
- Authentication and authorization
- Input validation and sanitization
- Sensitive data exposure

### Language-Specific Guidelines

_To be added as the primary programming language is determined_

---

## AI Assistant Guidelines

### When Working with This Repository

#### Initial Analysis
1. **Read before modifying**: Always read files before suggesting changes
2. **Understand context**: Review related files to understand the full picture
3. **Check existing patterns**: Follow established conventions in the codebase

#### Making Changes
1. **Minimal changes**: Only modify what's necessary for the task
2. **No over-engineering**: Don't add features beyond the request
3. **Preserve style**: Match existing code formatting and conventions
4. **Test changes**: Verify changes work as expected

#### Communication
1. **Be concise**: Provide clear, actionable responses
2. **Include file references**: Use `file_path:line_number` format
3. **Explain trade-offs**: Discuss different approaches when relevant
4. **Ask for clarification**: Don't guess when requirements are unclear

### Task Management

Use TodoWrite for:
- Tasks with 3+ steps
- Complex or non-trivial work
- Multiple user-provided tasks
- Tracking progress on long-running work

Don't use TodoWrite for:
- Single, straightforward tasks
- Trivial operations
- Purely informational queries

### Tool Usage Preferences

**File Operations**:
- `Read`: Reading files (not `cat`)
- `Edit`: Modifying files (not `sed`)
- `Write`: Creating new files (not `echo >`)
- `Glob`: Finding files by pattern
- `Grep`: Searching file contents

**Exploration**:
- Use `Task` tool with `subagent_type=Explore` for codebase exploration
- Use specialized agents for complex searches or analysis

**Parallel Execution**:
- Run independent operations in parallel
- Batch multiple tool calls in single message when possible

---

## Common Tasks

### Setting Up Development Environment

_To be documented once project structure is established_

### Running Tests

_To be documented once testing framework is added_

### Building the Project

_To be documented once build system is configured_

### Deploying

_To be documented when deployment process is established_

---

## Resources

### Repository Information
- **Remote URL**: `http://127.0.0.1:55811/git/gotbaragi77-dot/toma`
- **Git User**: Claude (noreply@anthropic.com)
- **Owner**: gotbaragi77-dot (gotbaragi77@gmail.com)

### Initial Commit
- **Hash**: 3a69b8f
- **Date**: 2025-09-24 22:22:31 +0900
- **Message**: "Initial commit"

### External Resources
_Add relevant documentation, design files, or reference materials here_

---

## Notes for Future Updates

This CLAUDE.md file should be updated when:

1. **Project structure changes**: New directories or major reorganization
2. **New dependencies added**: Package managers, frameworks, libraries
3. **Build process established**: Configuration files, build scripts
4. **Testing framework added**: Test conventions, running tests
5. **Coding standards defined**: Language-specific guidelines
6. **Deployment process created**: Deployment instructions
7. **New workflows established**: CI/CD, code review processes
8. **Common issues identified**: Troubleshooting section needed

---

## Quick Reference

### Current Branch Requirements
- Branch must start with `claude/`
- Branch must end with session ID
- Push with: `git push -u origin <branch-name>`

### File Reference Format
When referencing code: `file_path:line_number`

Example: `src/main.js:42`

### Getting Help
- Check this CLAUDE.md first
- Review README.md for project overview
- Examine existing code for patterns
- Ask for clarification when uncertain

---

**Remember**: This is a living document. Update it as the project evolves to keep it useful and accurate.
