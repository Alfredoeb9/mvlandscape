import { createFileRoute } from '@tanstack/react-router'

export const Route = createFileRoute('/services/Residential')({
  component: () => <div>Hello /services/Residential!</div>
})