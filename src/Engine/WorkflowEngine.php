<?php namespace Engine;

class WorkflowEngine {

    public function __construct() {
    
    }

    public function createWorkflowInstance($workflowId) {

        // Create Workflow Instance
        $workflowInstance = new WorkflowInstance;
        $workflowInstance->id = 0;
        $WorkflowInstance->workflowId = $workflowId;
        $workflowInstance->status = "Running";

        // Load Workflow Configuration
        $placeId = -1;

        $token = new Token;
        $token->id = 0;
        $token->placeId = $placeId;
        $token->workflowInstanceId = $workflowInstance->id;

        // Build Petri Graph
        $arcs = [];

        // Return Workflow Instance
        return $workflowInstance;
    }
}

?>
